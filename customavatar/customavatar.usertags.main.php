<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=usertags.main
Order=20
[END_COT_EXT]
==================== */

/**
* Customavatar Plugin
*
* @package customavatar
* @author Dmitri Beliavski
* @copyright (c) 2023 seditio.by
*/

defined('COT_CODE') or die('Wrong URL');

include_once cot_incfile('customavatar', 'plug', 'resources');

if (is_array($user_data) && !empty($user_data['user_id']) && !empty($user_data['user_name']) && !empty($user_data['user_avatar'])) {
  $temp_array['AVATAR'] = cot_rc('userimg_img_alt', array('src' => $user_data['user_avatar'], 'alt' => $user_data['user_name'], 'class' => 'img-fluid'));
} else {
  $temp_array['AVATAR'] = cot_rc('userimg_img_alt', array('src' => 'datas/defaultav/default.png', 'alt' => '', 'class' => 'img-fluid'));
}
