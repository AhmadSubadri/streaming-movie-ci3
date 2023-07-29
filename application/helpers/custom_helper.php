<?php defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('generate_youtube_video_link')) {
    /**
     * Generate YouTube video link with Plyr
     *
     * @param string $videoId YouTube video ID
     * @return string YouTube video link
     */
    function generate_youtube_video_link($videoId)
    {
        return 'https://www.youtube.com/embed/' . $videoId . '?enablejsapi=1';
    }
}
