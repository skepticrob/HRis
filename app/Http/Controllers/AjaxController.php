<?php namespace HRis\Http\Controllers;

use HRis\City;
use HRis\Dependent;
use HRis\Education;
use HRis\EducationLevel;
use HRis\EmergencyContact;
use HRis\Employee;
use HRis\EmployeeSkill;
use HRis\EmploymentStatus;
use HRis\Http\Requests\Administration\EducationRequest;
use HRis\Http\Requests\Administration\EmploymentStatusRequest;
use HRis\Http\Requests\Administration\JobTitleRequest;
use HRis\Http\Requests\Administration\NationalityRequest;
use HRis\Http\Requests\Administration\PayGradeRequest;
use HRis\Http\Requests\Administration\SkillRequest;
use HRis\Http\Requests\Administration\WorkShiftRequest;
use HRis\Http\Requests\PIM\TerminationReasonsRequest;
use HRis\Http\Requests\Profile\DependentsRequest;
use HRis\Http\Requests\Profile\EmergencyContactsRequest;
use HRis\Http\Requests\Profile\QualificationsEducationRequest;
use HRis\Http\Requests\Profile\QualificationsSkillRequest;
use HRis\Http\Requests\Profile\QualificationsWorkExperienceRequest;
use HRis\JobTitle;
use HRis\Nationality;
use HRis\PayGrade;
use HRis\Skill;
use HRis\TerminationReason;
use HRis\WorkExperience;
use HRis\WorkShift;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;

/**
 * @Middleware("auth")
 */
class AjaxController extends Controller {

    /**
     * Show the profile personal details form.
     *
     * @Get("ajax/update-address")
     */
    public function updateAddress()
    {
        if (\Request::ajax())
        {

            $provinceId = \Request::get('province_id');
            $cities = City::whereProvinceId($provinceId)->lists('name', 'id');

            $json = '';
            foreach ($cities as $key => $value)
            {
                $id = $key;
                $name = $value;

                $json[] = ['id' => $id, 'name' => $name];
            }

            print(json_encode($json));
        }
    }

    /**
     * Delete the profile emergency contact.
     *
     * @Delete("ajax/profile/emergency-contacts")
     * @Delete("ajax/pim/employee-list/{id}/emergency-contacts")
     *
     * @param EmergencyContactsRequest $request
     */
    public function deleteEmergencyContact(EmergencyContactsRequest $request)
    {
        if ($request->ajax())
        {

            $emergencyContactId = $request->get('id');

            try
            {
                EmergencyContact::whereId($emergencyContactId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the profile emergency contact.
     *
     * @Get("ajax/profile/emergency-contacts")
     * @Get("ajax/pim/employee-list/{id}/emergency-contacts")
     *
     * @param EmergencyContactsRequest $request
     */
    public function getEmergencyContact(EmergencyContactsRequest $request)
    {
        if ($request->ajax())
        {

            $emergencyContactId = $request->get('id');

            try
            {
                $emergencyContact = EmergencyContact::whereId($emergencyContactId)->first();

                print(json_encode($emergencyContact));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the profile dependent.
     *
     * @Delete("ajax/profile/dependents")
     * @Delete("ajax/pim/employee-list/{id}/dependents")
     * @param DependentsRequest $request
     */
    public function deleteDependent(DependentsRequest $request)
    {
        if ($request->ajax())
        {

            $dependentId = $request->get('id');

            try
            {
                Dependent::whereId($dependentId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the profile dependent.
     *
     * @Get("ajax/profile/dependents")
     * @Get("ajax/pim/employee-list/{id}/dependents")
     *
     * @param DependentsRequest $request
     */
    public function getDependent(DependentsRequest $request)
    {
        if ($request->ajax())
        {

            $dependentId = $request->get('id');

            try
            {
                $dependent = Dependent::whereId($dependentId)->first();

                print(json_encode($dependent));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the profile qualifications work experience.
     *
     * @Get("ajax/profile/qualifications/work-experience")
     * @Get("ajax/pim/employee-list/{id}/qualifications/work-experience")
     *
     * @param QualificationsWorkExperienceRequest $request
     */
    public function getWorkExperience(QualificationsWorkExperienceRequest $request)
    {
        if ($request->ajax())
        {

            $workExperienceId = $request->get('id');

            try
            {
                $workExperience = WorkExperience::whereId($workExperienceId)->first();

                print(json_encode($workExperience));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the profile qualifications work experience.
     *
     * @Delete("ajax/profile/qualifications/work-experience")
     * @Delete("ajax/pim/employee-list/{id}/qualifications/work-experience")
     *
     * @param QualificationsWorkExperienceRequest $request
     */
    public function deleteWorkExperience(QualificationsWorkExperienceRequest $request)
    {
        if ($request->ajax())
        {

            $workExperienceId = $request->get('id');

            try
            {
                WorkExperience::whereId($workExperienceId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the profile qualifications education.
     *
     * @Get("ajax/profile/qualifications/education")
     * @Get("ajax/pim/employee-list/{id}/qualifications/education")
     *
     * @param QualificationsEducationRequest $request
     */
    public function getEducation(QualificationsEducationRequest $request)
    {
        if ($request->ajax())
        {

            $educationId = $request->get('id');

            try
            {
                $education = Education::whereId($educationId)->first();

                print(json_encode($education));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the profile qualifications education.
     *
     * @Delete("ajax/profile/qualifications/education")
     * @Delete("ajax/pim/employee-list/{id}/qualifications/education")
     *
     * @param QualificationsEducationRequest $request
     */
    public function deleteEduction(QualificationsEducationRequest $request)
    {
        if ($request->ajax())
        {

            $educationId = $request->get('id');

            try
            {
                Education::whereId($educationId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the profile qualifications skill.
     *
     * @Get("ajax/profile/qualifications/skill")
     * @Get("ajax/pim/employee-list/{id}/qualifications/skill")
     *
     * @param QualificationsSkillRequest $request
     */
    public function getSkill(QualificationsSkillRequest $request)
    {
        if ($request->ajax())
        {

            $employeeSkillId = $request->get('id');

            try
            {
                $skill = EmployeeSkill::whereId($employeeSkillId)->first();

                print(json_encode($skill));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the profile qualifications skill.
     *
     * @Delete("ajax/profile/qualifications/skill")
     * @Delete("ajax/pim/employee-list/{id}/qualifications/skill")
     *
     * @param QualificationsSkillRequest $request
     */
    public function deleteSkill(QualificationsSkillRequest $request)
    {
        if ($request->ajax())
        {

            $employeeSkillId = $request->get('id');

            try
            {
                EmployeeSkill::whereId($employeeSkillId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the profile qualifications skill.
     *
     * @Post("ajax/upload-profile-image")
     */
    public function uploadProfileImage()
    {
        if (Request::ajax())
        {


            try
            {
                $employee = Employee::whereId(Request::get('employeeId'))->first();

                $img = Request::get('imageData');

                $filename = md5($img) . '.png';

                $path = public_path() . '/img/profile/' . $filename;

                File::put($path, file_get_contents($img));

                $employee->avatar = $filename;
                $employee->save();

                print($filename);

            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the profile qualifications skill.
     *
     * @Get("ajax/get-termination-reason")
     *
     * @param TerminationReasonsRequest $request
     */
    public function getTerminationReason(TerminationReasonsRequest $request)
    {
        if ($request->ajax())
        {

            $terminationReasonId = $request->get('id');

            try
            {
                $terminationReason = TerminationReason::whereId($terminationReasonId)->first();

                print(json_encode($terminationReason));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the profile qualifications skill.
     *
     * @Delete("ajax/delete-termination-reason")
     *
     * @param TerminationReasonsRequest $request
     */
    public function deleteTerminationReason(TerminationReasonsRequest $request)
    {
        if ($request->ajax())
        {

            $terminationReasonId = $request->get('id');

            try
            {
                TerminationReason::whereId($terminationReasonId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the job title.
     *
     * @Get("ajax/get-job-title")
     *
     * @param JobTitleRequest $request
     */
    public function getJobTitle(JobTitleRequest $request)
    {
        if ($request->ajax())
        {

            $jobTitleId = $request->get('id');

            try
            {
                $jobTitle = JobTitle::whereId($jobTitleId)->first();

                print(json_encode($jobTitle));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the job title.
     *
     * @Delete("ajax/delete-job-title")
     *
     * @param JobTitleRequest $request
     */
    public function deleteJobTitle(JobTitleRequest $request)
    {
        if ($request->ajax())
        {

            $jobTitleId = $request->get('id');

            try
            {
                JobTitle::whereId($jobTitleId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the employment status.
     *
     * @Get("ajax/get-employment-status")
     *
     * @param EmploymentStatusRequest $request
     */
    public function getEmploymentStatus(EmploymentStatusRequest $request)
    {
        if ($request->ajax())
        {

            $employmentStatusId = $request->get('id');

            try
            {
                $employmentStatus = EmploymentStatus::whereId($employmentStatusId)->first();

                print(json_encode($employmentStatus));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the employment status.
     *
     * @Delete("ajax/delete-employment-status")
     *
     * @param EmploymentStatusRequest $request
     */
    public function deleteEmploymentStatus(EmploymentStatusRequest $request)
    {
        if ($request->ajax())
        {

            $employmentStatusId = $request->get('id');

            try
            {
                EmploymentStatus::whereId($employmentStatusId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the nationality.
     *
     * @Get("ajax/get-nationality")
     *
     * @param NationalityRequest $request
     */
    public function getNationality(NationalityRequest $request)
    {
        if ($request->ajax())
        {

            $nationalityId = $request->get('id');

            try
            {
                $nationality = Nationality::whereId($nationalityId)->first();

                print(json_encode($nationality));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the nationality.
     *
     * @Delete("ajax/delete-nationality")
     *
     * @param NationalityRequest $request
     */
    public function deleteNationality(NationalityRequest $request)
    {
        if ($request->ajax())
        {

            $nationalityId = $request->get('id');

            try
            {
                Nationality::whereId($nationalityId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the employment status.
     *
     * @Get("ajax/get-work-shift")
     *
     * @param WorkShiftRequest $request
     */
    public function getWorkShift(WorkShiftRequest $request)
    {
        if ($request->ajax())
        {

            $workShiftId = $request->get('id');
            try
            {
                $workShift = WorkShift::whereId($workShiftId)->first();

                print(json_encode($workShift));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the nationality.
     *
     * @Delete("ajax/delete-work-shift")
     *
     * @param WorkShiftRequest $request
     */
    public function deleteWorkShift(WorkShiftRequest $request)
    {
        if ($request->ajax())
        {

            $workShiftId = $request->get('id');

            try
            {
                WorkShift::whereId($workShiftId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the employment status.
     *
     * @Get("ajax/get-pay-grade")
     *
     * @param PayGradeRequest $request
     */
    public function getPayGrade(PayGradeRequest $request)
    {
        if ($request->ajax())
        {

            $payGradeId = $request->get('id');

            try
            {
                $payGrade = PayGrade::whereId($payGradeId)->first();

                print(json_encode($payGrade));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the nationality.
     *
     * @Delete("ajax/delete-pay-grade")
     *
     * @param PayGradeRequest $request
     */
    public function deletePayGrade(PayGradeRequest $request)
    {
        if ($request->ajax())
        {

            $payGradeId = $request->get('id');

            try
            {
                PayGrade::whereId($payGradeId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the skill.
     *
     * @Get("ajax/get-skill")
     *
     * @param SkillRequest $request
     */
    public function getAdminSkill(SkillRequest $request)
    {
        if ($request->ajax())
        {

            $skillId = $request->get('id');

            try
            {
                $skill = Skill::whereId($skillId)->first();

                print(json_encode($skill));
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the skill.
     *
     * @Delete("ajax/delete-skill")
     *
     * @param SkillRequest $request
     */
    public function deleteAdminSkill(SkillRequest $request)
    {
        if ($request->ajax())
        {

            $skillId = $request->get('id');

            try
            {
                Skill::whereId($skillId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Get the education.
     *
     * @Get("ajax/get-education")
     *
     * @param EducationRequest $request
     */
    public function getAdminEducation(EducationRequest $request)
    {
        if ($request->ajax())
        {

            $educationId = $request->get('id');

            try
            {
                $education = EducationLevel::whereId($educationId)->first();

                print(json_encode($education));

            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }

    /**
     * Delete the education.
     *
     * @Delete("ajax/delete-education")
     *
     * @param EducationRequest $request
     */
    public function deleteAdminEducation(EducationRequest $request)
    {
        if ($request->ajax())
        {

            $educationId = $request->get('id');

            try
            {
                EducationLevel::whereId($educationId)->delete();

                print('success');
            } catch (\Exception $e)
            {
                print('failed');
            }

        }
    }
}