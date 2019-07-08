<?php
namespace TymFrontiers\Helper;

trait FileData{
  public $types = [
    "image" 		=> [
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jpe' => 'image/jpeg',
        'gif' => 'image/gif',
        'bmp' => 'image/bmp',
        'ico' => 'image/vnd.microsoft.icon',
        'tiff' => 'image/tiff',
        'tif' => 'image/tiff',
        'svg' => 'image/svg+xml',
        'svgz' => 'image/svg+xml'
      ],
    'audio'			=> [
        'mp3' => 'audio/mpeg',
      ],
    'video'			=> [
        'qt' => 'video/quicktime',
        'mov' => 'video/quicktime',
        'mp4' => 'video/mpeg',
        'swf' => 'application/x-shockwave-flash',
        'flv' => 'video/x-flv',
      ],
    'text'			=> [
        'txt' => 'text/plain',
        'htm' => 'text/html',
        'html' => 'text/html',
        'php' => 'text/html',
        'css' => 'text/css',
        'js' => 'application/javascript',
        'json' => 'application/json',
        'xml' => 'application/xml',
      ],
    'archive'		=> [
        'zip' => 'application/zip',
        'rar' => 'application/x-rar-compressed',
        '7z'		=> 'application/x-7z-compressed',
        'exe' => 'application/x-msdownload',
        'msi' => 'application/x-msdownload',
        'cab' => 'application/vnd.ms-cab-compressed',
      ],
    'document'		=> [
        'pdf' => 'application/pdf',
        'doc' => 'application/msword',
        'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'rtf' => 'application/rtf',
        'xls' => 'application/vnd.ms-excel',
        'xlsx'=> 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        'ppt' => 'application/vnd.ms-powerpoint',
        'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
        'odt' => 'application/vnd.oasis.opendocument.text',
        'ods' => 'application/vnd.oasis.opendocument.spreadsheet'
      ],
    'graphic'			=> [
      'psd' => 'image/vnd.adobe.photoshop',
      'ai' => 'application/postscript',
      'eps' => 'application/postscript',
      'ps' => 'application/postscript',
      ]
  ];
  public $mime_types = [
    'txt' => 'text/plain',
    'htm' => 'text/html',
    'html' => 'text/html',
    'php' => 'text/x-php',
    'css' => 'text/css',
    'js' => 'application/javascript',
    'json' => 'application/json',
    'xml' => 'application/xml',
    'swf' => 'application/x-shockwave-flash',
    'flv' => 'video/x-flv',

    // images
    'png' => 'image/png',
    'jpg' => 'image/jpeg',
    'jpeg' => 'image/jpeg',
    'jpe' => 'image/jpeg',
    'gif' => 'image/gif',
    'bmp' => 'image/bmp',
    'ico' => 'image/vnd.microsoft.icon',
    'tiff' => 'image/tiff',
    'tif' => 'image/tiff',
    'svg' => 'image/svg+xml',
    'svgz' => 'image/svg+xml',

    // archives
    'zip' => 'application/zip',
    'rar' => 'application/x-rar-compressed',
    '7z'		=> 'application/x-7z-compressed',
    'exe' => 'application/x-msdownload',
    'msi' => 'application/x-msdownload',
    'cab' => 'application/vnd.ms-cab-compressed',

    // audio/video
    'mp3' => 'audio/mpeg',
    'qt' => 'video/quicktime',
    'mov' => 'video/quicktime',
    'mp4' => 'video/mpeg',

    // adobe
    'pdf' => 'application/pdf',
    'psd' => 'image/vnd.adobe.photoshop',
    'ai' => 'application/postscript',
    'eps' => 'application/postscript',
    'ps' => 'application/postscript',

    // ms office
    'doc' => 'application/msword',
    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
    'rtf' => 'application/rtf',
    'xls' => 'application/vnd.ms-excel',
    'xlsx'=> 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
    'ppt' => 'application/vnd.ms-powerpoint',
    'pptx' => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',

    // open office
    'odt' => 'application/vnd.oasis.opendocument.text',
    'ods' => 'application/vnd.oasis.opendocument.spreadsheet',
    // fonts
    'ttf' => 'application/octet-stream',
    'otf' => 'application/octet-stream',
    'eot' => 'application/vnd.ms-fontobject',
    'woff' => 'application/font-woff',
    'woff' => 'application/font-woff2',
    'woff2' => 'font/woff2'
  ];
  public $mime_ext = [
    'text/plain' => 'txt',
    'text/html' => 'htm',
    'text/html' => 'html',
    'text/x-php' => 'php',
    'text/css' => 'css',
    'application/javascript' => 'js',
    'application/json' => 'json',
    'application/xml' => 'xml',
    'application/x-shockwave-flash' => 'swf',
    'video/x-flv' => 'flv',

    // images
    'image/png' => 'png',
    'image/jpeg' => 'jpg',
    'image/jpeg' => 'jpeg',
    'image/jpeg' => 'jpe',
    'image/gif' => 'gif',
    'image/bmp' => 'bmp',
    'image/vnd.microsoft.icon' => 'ico',
    'image/tiff' => 'tiff',
    'image/tiff' => 'tif',
    'image/svg+xml' => 'svg',
    'image/svg+xml' => 'svgz',

    // archives
    'application/zip' => 'zip',
    'application/x-rar-compressed' => 'rar',
    'application/x-7z-compressed' => '7z'	,
    'application/x-msdownload' => 'exe',
    'application/x-msdownload' => 'msi',
    'application/vnd.ms-cab-compressed' => 'cab',

    // audio/video
    'audio/mpeg' => 'mp3',
    'video/quicktime' => 'qt',
    'video/quicktime' => 'mov',
    'video/mpeg' => 'mp4',

    // adobe
    'application/pdf' => 'pdf',
    'image/vnd.adobe.photoshop' => 'psd',
    'application/postscript' => 'ai',
    'application/postscript' => 'eps',
    'application/postscript' => 'ps',

    // ms office
    'application/msword' => 'doc',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document' => 'docx',
    'application/rtf' => 'rtf',
    'application/vnd.ms-excel' => 'xls',
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' => 'xlsx',
    'application/vnd.ms-powerpoint' => 'ppt',
    'application/vnd.openxmlformats-officedocument.presentationml.presentation' => 'pptx',

    // open office
    'application/vnd.oasis.opendocument.text' => 'odt',
    'application/vnd.oasis.opendocument.spreadsheet' => 'ods',
    // fonts
    'application/octet-stream' => 'ttf',
    'application/octet-stream' => 'otf',
    'application/vnd.ms-fontobject' => 'eot',
    'application/font-woff' => 'woff',
    'application/font-woff2' => 'woff',
    'font/woff2' => 'woff2'
  ];

}
