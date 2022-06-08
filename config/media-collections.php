<?php

return [
  'public_disk'  => env('MEDIA_DISK', 'public'),
  'private_disk' => 'media_private',
  
  /*
  |
  | This option controls if media are processed automatically or will be called manually
  |
  */
  'auto_process' => true,
];
