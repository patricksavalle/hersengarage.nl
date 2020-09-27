# Media-embedder expressionengine plugin / addon

Inserts embed-code for links wrapped in [[...]]. Just place a video-URL between two brackets and
this plugin will create the embed-code. 

Supports Youtube and Bitchute, *anything else* between brackets is considered an image-url

If your template looks like:

    {exp:embedder}{blog_content}{/exp:embedder}
    {exp:embedder}{comment}{/exp:embedder}

then this content will be transformed into appropriate HTML-code:

    [[https://hersengarage.nl/images/uploads/hersengarage/EePZ_SCUEAAjVBe.jpg Caption text]]

    [[https://www.bitchute.com/video/8K7_B8kd4Y4/]]

Generated HTML:

    <figure>
    <iframe class='eb_video eb_bitchute' src='$1' allowfullscreen></iframe>
    <figure>
    <figcaption>$2</figcaption>

-   [Supported youtube-URL formats](https://regex101.com/r/oPBc0O/2)
-   [Supported bitchute-URL formats](https://regex101.com/r/JFnNuU/2)

It is allowed to 

## Change Log

0.1
	- Works

1.0
    - Production
    
## Todo

Include more websites / media types like Soundcloud, Vimeo, etc.

## License

I don't care
