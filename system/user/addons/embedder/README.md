# Media-embedder expressionengine plugin / addon

Inserts embed-code for links wrapped in [[...]]. Just place a video-URL between two brackets and
this plugin will create the embed-code. 

Supports Youtube and Bitchute, *anything else* between brackets is considered an image-url

If your template looks like:

    {exp:embedder}{blog_content}{/exp:embedder}
    {exp:embedder}{comment}{/exp:embedder}

then this content will be transformed into appropriate HTML-code:

    [[https://hersengarage.nl/images/uploads/hersengarage/EePZ_SCUEAAjVBe.jpg Alt text]]

    [[https://www.bitchute.com/video/8K7_B8kd4Y4/]]

Generated HTML:

    <iframe class='eb_video eb_bitchute' src='//www.bitchute.com/embed/...' allowfullscreen></iframe>

Supports probably all youtube URL-formats

    https://www.youtube.com/watch?v=DFYRQ_zQ-gk&feature=featured
    https://www.youtube.com/watch?v=DFYRQ_zQ-gk
    http://www.youtube.com/watch?v=DFYRQ_zQ-gk
    //www.youtube.com/watch?v=DFYRQ_zQ-gk
    www.youtube.com/watch?v=DFYRQ_zQ-gk
    https://youtube.com/watch?v=DFYRQ_zQ-gk
    http://youtube.com/watch?v=DFYRQ_zQ-gk
    //youtube.com/watch?v=DFYRQ_zQ-gk
    youtube.com/watch?v=DFYRQ_zQ-gk
    
    https://m.youtube.com/watch?v=DFYRQ_zQ-gk
    http://m.youtube.com/watch?v=DFYRQ_zQ-gk
    //m.youtube.com/watch?v=DFYRQ_zQ-gk
    m.youtube.com/watch?v=DFYRQ_zQ-gk
    
    https://www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US
    http://www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US
    //www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US
    www.youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US
    youtube.com/v/DFYRQ_zQ-gk?fs=1&hl=en_US
    
    https://www.youtube.com/embed/DFYRQ_zQ-gk?autoplay=1
    https://www.youtube.com/embed/DFYRQ_zQ-gk
    http://www.youtube.com/embed/DFYRQ_zQ-gk
    //www.youtube.com/embed/DFYRQ_zQ-gk
    www.youtube.com/embed/DFYRQ_zQ-gk
    https://youtube.com/embed/DFYRQ_zQ-gk
    http://youtube.com/embed/DFYRQ_zQ-gk
    //youtube.com/embed/DFYRQ_zQ-gk
    youtube.com/embed/DFYRQ_zQ-gk
    
    https://youtu.be/DFYRQ_zQ-gk?t=120
    https://youtu.be/DFYRQ_zQ-gk
    http://youtu.be/DFYRQ_zQ-gk
    //youtu.be/DFYRQ_zQ-gk
    youtu.be/DFYRQ_zQ-gk
    
    https://www.youtube.com/HamdiKickProduction?v=DFYRQ_zQ-gk

## Change Log

0.1
	- Works

## License

I don't care
