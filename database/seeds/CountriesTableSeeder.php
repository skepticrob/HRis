<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CountriesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::table('countries')->delete();

        DB::table('countries')->insert(
            [
				['id' => 1, 'name' => 'Afghanistan'],
				['id' => 2, 'name' => 'Akrotiri'],
				['id' => 3, 'name' => 'Albania'],
				['id' => 4, 'name' => 'Algeria'],
				['id' => 5, 'name' => 'American Samoa'],
				['id' => 6, 'name' => 'Andorra'],
				['id' => 7, 'name' => 'Angola'],
				['id' => 8, 'name' => 'Anguilla'],
				['id' => 9, 'name' => 'Antarctica'],
				['id' => 10, 'name' => 'Antigua and Barbuda'],
				['id' => 11, 'name' => 'Argentina'],
				['id' => 12, 'name' => 'Armenia'],
				['id' => 13, 'name' => 'Aruba'],
				['id' => 14, 'name' => 'Ashmore and Cartier Islands'],
				['id' => 15, 'name' => 'Australia'],
				['id' => 16, 'name' => 'Austria'],
				['id' => 17, 'name' => 'Azerbaijan'],
				['id' => 18, 'name' => 'Bahamas, The'],
				['id' => 19, 'name' => 'Bahrain'],
				['id' => 20, 'name' => 'Bangladesh'],
				['id' => 21, 'name' => 'Barbados'],
				['id' => 22, 'name' => 'Bassas da India'],
				['id' => 23, 'name' => 'Belarus'],
				['id' => 24, 'name' => 'Belgium'],
				['id' => 25, 'name' => 'Belize'],
				['id' => 26, 'name' => 'Benin'],
				['id' => 27, 'name' => 'Bermuda'],
				['id' => 28, 'name' => 'Bhutan'],
				['id' => 29, 'name' => 'Bolivia'],
				['id' => 30, 'name' => 'Bosnia and Herzegovina'],
				['id' => 31, 'name' => 'Botswana'],
				['id' => 32, 'name' => 'Bouvet Island'],
				['id' => 33, 'name' => 'Brazil'],
				['id' => 34, 'name' => 'British Indian Ocean Territory'],
				['id' => 35, 'name' => 'British Virgin Islands'],
				['id' => 36, 'name' => 'Brunei'],
				['id' => 37, 'name' => 'Bulgaria'],
				['id' => 38, 'name' => 'Burkina Faso'],
				['id' => 39, 'name' => 'Burma'],
				['id' => 40, 'name' => 'Burundi'],
				['id' => 41, 'name' => 'Cambodia'],
				['id' => 42, 'name' => 'Cameroon'],
				['id' => 43, 'name' => 'Canada'],
				['id' => 44, 'name' => 'Cape Verde'],
				['id' => 45, 'name' => 'Cayman Islands'],
				['id' => 46, 'name' => 'Central African Republic'],
				['id' => 47, 'name' => 'Chad'],
				['id' => 48, 'name' => 'Chile'],
				['id' => 49, 'name' => 'China'],
				['id' => 50, 'name' => 'Christmas Island'],
				['id' => 51, 'name' => 'Clipperton Island'],
				['id' => 52, 'name' => 'Cocos (Keeling) Islands'],
				['id' => 53, 'name' => 'Colombia'],
				['id' => 54, 'name' => 'Comoros'],
				['id' => 55, 'name' => 'Congo, Democratic Republic of the'],
				['id' => 56, 'name' => 'Congo, Republic of the'],
				['id' => 57, 'name' => 'Cook Islands'],
				['id' => 58, 'name' => 'Coral Sea Islands'],
				['id' => 59, 'name' => 'Costa Rica'],
				['id' => 60, 'name' => 'Cote d\'Ivoire'],
				['id' => 61, 'name' => 'Croatia'],
				['id' => 62, 'name' => 'Cuba'],
				['id' => 63, 'name' => 'Cyprus'],
				['id' => 64, 'name' => 'Czech Republic'],
				['id' => 65, 'name' => 'Denmark'],
				['id' => 66, 'name' => 'Dhekelia'],
				['id' => 67, 'name' => 'Djibouti'],
				['id' => 68, 'name' => 'Dominica'],
				['id' => 69, 'name' => 'Dominican Republic'],
				['id' => 70, 'name' => 'Ecuador'],
				['id' => 71, 'name' => 'Egypt'],
				['id' => 72, 'name' => 'El Salvador'],
				['id' => 73, 'name' => 'Equatorial Guinea'],
				['id' => 74, 'name' => 'Eritrea'],
				['id' => 75, 'name' => 'Estonia'],
				['id' => 76, 'name' => 'Ethiopia'],
				['id' => 77, 'name' => 'Europa Island'],
				['id' => 78, 'name' => 'Falkland Islands (Islas Malvinas)'],
				['id' => 79, 'name' => 'Faroe Islands'],
				['id' => 80, 'name' => 'Fiji'],
				['id' => 81, 'name' => 'Finland'],
				['id' => 82, 'name' => 'France'],
				['id' => 83, 'name' => 'French Guiana'],
				['id' => 84, 'name' => 'French Polynesia'],
				['id' => 85, 'name' => 'French Southern and Antarctic Lands'],
				['id' => 86, 'name' => 'Gabon'],
				['id' => 87, 'name' => 'Gambia, The'],
				['id' => 88, 'name' => 'Gaza Strip'],
				['id' => 89, 'name' => 'Georgia'],
				['id' => 90, 'name' => 'Germany'],
				['id' => 91, 'name' => 'Ghana'],
				['id' => 92, 'name' => 'Gibraltar'],
				['id' => 93, 'name' => 'Glorioso Islands'],
				['id' => 94, 'name' => 'Greece'],
				['id' => 95, 'name' => 'Greenland'],
				['id' => 96, 'name' => 'Grenada'],
				['id' => 97, 'name' => 'Guadeloupe'],
				['id' => 98, 'name' => 'Guam'],
				['id' => 99, 'name' => 'Guatemala'],
				['id' => 100, 'name' => 'Guernsey'],
				['id' => 101, 'name' => 'Guinea'],
				['id' => 102, 'name' => 'Guinea-Bissau'],
				['id' => 103, 'name' => 'Guyana'],
				['id' => 104, 'name' => 'Haiti'],
				['id' => 105, 'name' => 'Heard Island and McDonald Islands'],
				['id' => 106, 'name' => 'Holy See (Vatican City)'],
				['id' => 107, 'name' => 'Honduras'],
				['id' => 108, 'name' => 'Hong Kong'],
				['id' => 109, 'name' => 'Hungary'],
				['id' => 110, 'name' => 'Iceland'],
				['id' => 111, 'name' => 'India'],
				['id' => 112, 'name' => 'Indonesia'],
				['id' => 113, 'name' => 'Iran'],
				['id' => 114, 'name' => 'Iraq'],
				['id' => 115, 'name' => 'Ireland'],
				['id' => 116, 'name' => 'Isle of Man'],
				['id' => 117, 'name' => 'Israel'],
				['id' => 118, 'name' => 'Italy'],
				['id' => 119, 'name' => 'Jamaica'],
				['id' => 120, 'name' => 'Jan Mayen'],
				['id' => 121, 'name' => 'Japan'],
				['id' => 122, 'name' => 'Jersey'],
				['id' => 123, 'name' => 'Jordan'],
				['id' => 124, 'name' => 'Juan de Nova Island'],
				['id' => 125, 'name' => 'Kazakhstan'],
				['id' => 126, 'name' => 'Kenya'],
				['id' => 127, 'name' => 'Kiribati'],
				['id' => 128, 'name' => 'Korea, North'],
				['id' => 129, 'name' => 'Korea, South'],
				['id' => 130, 'name' => 'Kuwait'],
				['id' => 131, 'name' => 'Kyrgyzstan'],
				['id' => 132, 'name' => 'Laos'],
				['id' => 133, 'name' => 'Latvia'],
				['id' => 134, 'name' => 'Lebanon'],
				['id' => 135, 'name' => 'Lesotho'],
				['id' => 136, 'name' => 'Liberia'],
				['id' => 137, 'name' => 'Libya'],
				['id' => 138, 'name' => 'Liechtenstein'],
				['id' => 139, 'name' => 'Lithuania'],
				['id' => 140, 'name' => 'Luxembourg'],
				['id' => 141, 'name' => 'Macau'],
				['id' => 142, 'name' => 'Macedonia'],
				['id' => 143, 'name' => 'Madagascar'],
				['id' => 144, 'name' => 'Malawi'],
				['id' => 145, 'name' => 'Malaysia'],
				['id' => 146, 'name' => 'Maldives'],
				['id' => 147, 'name' => 'Mali'],
				['id' => 148, 'name' => 'Malta'],
				['id' => 149, 'name' => 'Marshall Islands'],
				['id' => 150, 'name' => 'Martinique'],
				['id' => 151, 'name' => 'Mauritania'],
				['id' => 152, 'name' => 'Mauritius'],
				['id' => 153, 'name' => 'Mayotte'],
				['id' => 154, 'name' => 'Mexico'],
				['id' => 155, 'name' => 'Micronesia, Federated States of'],
				['id' => 156, 'name' => 'Moldova'],
				['id' => 157, 'name' => 'Monaco'],
				['id' => 158, 'name' => 'Mongolia'],
				['id' => 159, 'name' => 'Montserrat'],
				['id' => 160, 'name' => 'Morocco'],
				['id' => 161, 'name' => 'Mozambique'],
				['id' => 162, 'name' => 'Namibia'],
				['id' => 163, 'name' => 'Nauru'],
				['id' => 164, 'name' => 'Navassa Island'],
				['id' => 165, 'name' => 'Nepal'],
				['id' => 166, 'name' => 'Netherlands'],
				['id' => 167, 'name' => 'Netherlands Antilles'],
				['id' => 168, 'name' => 'New Caledonia'],
				['id' => 169, 'name' => 'New Zealand'],
				['id' => 170, 'name' => 'Nicaragua'],
				['id' => 171, 'name' => 'Niger'],
				['id' => 172, 'name' => 'Nigeria'],
				['id' => 173, 'name' => 'Niue'],
				['id' => 174, 'name' => 'Norfolk Island'],
				['id' => 175, 'name' => 'Northern Mariana Islands'],
				['id' => 176, 'name' => 'Norway'],
				['id' => 177, 'name' => 'Oman'],
				['id' => 178, 'name' => 'Pakistan'],
				['id' => 179, 'name' => 'Palau'],
				['id' => 180, 'name' => 'Panama'],
				['id' => 181, 'name' => 'Papua New Guinea'],
				['id' => 182, 'name' => 'Paracel Islands'],
				['id' => 183, 'name' => 'Paraguay'],
				['id' => 184, 'name' => 'Peru'],
				['id' => 185, 'name' => 'Philippines'],
				['id' => 186, 'name' => 'Pitcairn Islands'],
				['id' => 187, 'name' => 'Poland'],
				['id' => 188, 'name' => 'Portugal'],
				['id' => 189, 'name' => 'Puerto Rico'],
				['id' => 190, 'name' => 'Qatar'],
				['id' => 191, 'name' => 'Reunion'],
				['id' => 192, 'name' => 'Romania'],
				['id' => 193, 'name' => 'Russia'],
				['id' => 194, 'name' => 'Rwanda'],
				['id' => 195, 'name' => 'Saint Helena'],
				['id' => 196, 'name' => 'Saint Kitts and Nevis'],
				['id' => 197, 'name' => 'Saint Lucia'],
				['id' => 198, 'name' => 'Saint Pierre and Miquelon'],
				['id' => 199, 'name' => 'Saint Vincent and the Grenadines'],
				['id' => 200, 'name' => 'Samoa'],
				['id' => 201, 'name' => 'San Marino'],
				['id' => 202, 'name' => 'Sao Tome and Principe'],
				['id' => 203, 'name' => 'Saudi Arabia'],
				['id' => 204, 'name' => 'Senegal'],
				['id' => 205, 'name' => 'Serbia and Montenegro'],
				['id' => 206, 'name' => 'Seychelles'],
				['id' => 207, 'name' => 'Sierra Leone'],
				['id' => 208, 'name' => 'Singapore'],
				['id' => 209, 'name' => 'Slovakia'],
				['id' => 210, 'name' => 'Slovenia'],
				['id' => 211, 'name' => 'Solomon Islands'],
				['id' => 212, 'name' => 'Somalia'],
				['id' => 213, 'name' => 'South Africa'],
				['id' => 214, 'name' => 'South Georgia and the South Sandwich Islands'],
				['id' => 215, 'name' => 'Spain'],
				['id' => 216, 'name' => 'Spratly Islands'],
				['id' => 217, 'name' => 'Sri Lanka'],
				['id' => 218, 'name' => 'Sudan'],
				['id' => 219, 'name' => 'Suriname'],
				['id' => 220, 'name' => 'Svalbard'],
				['id' => 221, 'name' => 'Swaziland'],
				['id' => 222, 'name' => 'Sweden'],
				['id' => 223, 'name' => 'Switzerland'],
				['id' => 224, 'name' => 'Syria'],
				['id' => 225, 'name' => 'Taiwan'],
				['id' => 226, 'name' => 'Tajikistan'],
				['id' => 227, 'name' => 'Tanzania'],
				['id' => 228, 'name' => 'Thailand'],
				['id' => 229, 'name' => 'Timor-Leste'],
				['id' => 230, 'name' => 'Togo'],
				['id' => 231, 'name' => 'Tokelau'],
				['id' => 232, 'name' => 'Tonga'],
				['id' => 233, 'name' => 'Trinidad and Tobago'],
				['id' => 234, 'name' => 'Tromelin Island'],
				['id' => 235, 'name' => 'Tunisia'],
				['id' => 236, 'name' => 'Turkey'],
				['id' => 237, 'name' => 'Turkmenistan'],
				['id' => 238, 'name' => 'Turks and Caicos Islands'],
				['id' => 239, 'name' => 'Tuvalu'],
				['id' => 240, 'name' => 'Uganda'],
				['id' => 241, 'name' => 'Ukraine'],
				['id' => 242, 'name' => 'United Arab Emirates'],
				['id' => 243, 'name' => 'United Kingdom'],
				['id' => 244, 'name' => 'United States'],
				['id' => 245, 'name' => 'Uruguay'],
				['id' => 246, 'name' => 'Uzbekistan'],
				['id' => 247, 'name' => 'Vanuatu'],
				['id' => 248, 'name' => 'Venezuela'],
				['id' => 249, 'name' => 'Vietnam'],
				['id' => 250, 'name' => 'Virgin Islands'],
				['id' => 251, 'name' => 'Wake Island'],
				['id' => 252, 'name' => 'Wallis and Futuna'],
				['id' => 253, 'name' => 'West Bank'],
				['id' => 254, 'name' => 'Western Sahara'],
				['id' => 255, 'name' => 'Yemen'],
				['id' => 256, 'name' => 'Zambia'],
				['id' => 257, 'name' => 'Zimbabwe'],
            ]
        );
	}

}