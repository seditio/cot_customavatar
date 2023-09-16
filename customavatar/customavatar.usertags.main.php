<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=usertags.main
Order=20
[END_COT_EXT]
==================== */

/**
* Customavatar Plugin / usertags.main hook
*
* @package customavatar
* @author Dmitri Beliavski
* @copyright (c) 2023 seditio.by
*/

defined('COT_CODE') or die('Wrong URL');

if (is_array($user_data) && !empty($user_data['user_id']) && !empty($user_data['user_name']) && !empty($user_data['user_avatar'])) {
  $isrc = $user_data['user_avatar'];
} else {
  $isrc = 'datas/defaultav/default.png';
}
$temp_array['AVATAR'] = cot_rc('userimg_img', array('src' => $isrc, 'alt' => \Cot::$L['Avatar'], 'class' => \Cot::$cfg['plugin']['customavatar']['class']));
