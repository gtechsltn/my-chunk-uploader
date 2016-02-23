<?php
/**
 * ################################################################################
 * MyChunkUploader
 * 
 * Copyright 2016 Eugen Mihailescu <eugenmihailescux@gmail.com>
 * 
 * This program is free software: you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation, either version 3 of the License, or (at your option) any later
 * version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 * ################################################################################
 * 
 * Short description:
 * URL: https://github.com/eugenmihailescu/my-chunk-uploader
 * 
 * Git revision information:
 * 
 * @version:	0.6.28-2 $
 * @commit:		7d9b17cc2a1287ddd13053ac4651e2542096ccc0 $
 * @author:		Eugen Mihailescu <eugenmihailescux@gmail.com> $
 * @date:		Mon Jun 29 12:39:38 2015 +0200 $
 * @file:		php-inject-glpv3.php $
 * 
 * @id:	php-inject-glpv3.php | Mon Jun 29 12:39:38 2015 +0200 | Eugen Mihailescu  $
*/

namespace MyChunkUploader;

require_once 'MyChunkUploader.php';
$uploader = new MyChunkUploader();
$uploader->run();
?>