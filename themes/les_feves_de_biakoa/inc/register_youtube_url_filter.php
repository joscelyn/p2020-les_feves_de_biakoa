<?php

    function clearYoutubeUrl($url)
    {

        $url = explode('=', $url);

        $embedUrl = explode("&", $url[1]);

        return $embedUrl[0];

    }

    add_filter('youtube_url_filter', 'clearYoutubeUrl');
