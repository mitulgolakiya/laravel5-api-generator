<?php
/**
 * User: Mitul
 * Date: 14/02/15
 * Time: 11:17 PM
 */

namespace App\Http\Controllers;


use App\Libraries\Exceptions\AppValidationException;

class AppBaseController extends Controller
{
	public function validateRequest($request, $rules)
	{
		$validator = $this->getValidationFactory()->make($request->all(), $rules);

		if ($validator->fails()) {
			throw new AppValidationException("Validation failed", ERROR_CODE_VALIDATION_FAILED, $validator->errors()->getMessages());
		}
	}
}