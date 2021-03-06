<?php namespace HRis\Http\Requests\Profile;

use Cartalyst\Sentry\Facades\Laravel\Sentry;
use HRis\Http\Requests\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class EmergencyContactsRequest extends Request {

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if (Request::isMethod('post') || Request::isMethod('patch'))
        {
            return ['first_name', 'relationship_id'];
        }

        return [];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @param Sentry $user
     * @return bool
     */
    public function authorize(Sentry $user)
    {
        $user = $user::getUser();

        $permission = Request::is('*pim/*') ? 'pim.emergency-contacts' : 'profile.emergency-contacts';

        // Create
        if (Request::isMethod('post'))
        {
            return ($user->hasAccess($permission . '.create'));
        } // Delete
        else if (Request::isMethod('delete'))
        {
            return ($user->hasAccess($permission . '.delete'));
        } // View
        else if (Request::isMethod('get'))
        {
            return ($user->hasAccess($permission . '.view'));
        } // Update
        else if (Request::isMethod('patch'))
        {
            return ($user->hasAccess($permission . '.update'));
        }

        return false;
    }

    public function forbiddenResponse()
    {
        return Response::make(View::make('errors.403'), 403);
    }

}
