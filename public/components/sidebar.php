<aside>
    <?php switch ($lang) {
        case "en":
    ?>

            <!-- <section class="stats">
            </section> -->

            <section class="switch news active">
                <article>
                    <h3 class="bold">Follow & join us!</h3>
                    <p>For networking there is a <a href="https://lists.posteo.de/listinfo/bitsundbaeume" target="_blank">mailing list</a>, einen <a href="https://twitter.com/bitsundbaeume/">Twitter account</a>, a <a href="https://matrix.to/#/#bitsundbaeume:matrix.org" target="_blank">community Matrix chat</a>, a <a href="https://discourse.bits-und-baeume.org" target="_blank">community discussion board</a>, a <a href="https://wiki.bits-und-baeume.org/struktur-der-bewegung/" target="_blank">community Wiki</a> and a <a href="https://mastodon.bits-und-baeume.org/@bits_und_baeume" target="_blank">community mastodon</a>.
                    </p>
                </article>

                <article>
                    <h3 class="bold">Diary</h3>
                    <p>See our upcoming events <a href="https://discourse.bits-und-baeume.org/calendar" target="_blank">here</a>.</p>
                </article>

                <article>
                    <h3 class="bold">Publication: <em>Was Bits&Bäume verbindet</em></h3>
                    <p>Our <a href="https://www.oekom.de/nc/buecher/gesamtprogramm/buch/was-bits-baeume-verbindet.html" target="_blank">conference book</a> has been published pushing further the topics of the conference. Thanks to all crowdfunders!
                    </p>
                </article>

                <article>
                    <h3 class="bold">Series of talks <em>Forum Bits&Bäume</em> in Berlin</h3>
                    <p>For more than two years, together with experts we will set <a href="/forum/<?php echo $lang; ?>">focus more on the sustainable design of digitization</a>.
                    </p>
                </article>

            </section>

            <section class="switch twitter">
                <?php require 'components/twitter.php'; ?>

            </section>

            <div class="control">
                <div class="news active">
                    <div class="icon"></div>
                    <p>news</p>
                </div>
                <div class="twitter">
                    <div class="icon"></div>
                    <p>#bitsundbäume</p>
                </div>
            </div>
        <?php
            break;
        default:
        ?>

            <!-- <section class="stats">
            </section> -->

            <section class="switch news active">
                <article>
                    <h3 class="bold">Komm dazu!</h3>
                    <p>Um uns zu vernetzen, haben wir eine <a href="https://lists.posteo.de/listinfo/bitsundbaeume" target="_blank">Mailingliste</a>, einen <a href="https://twitter.com/bitsundbaeume/">Twitteraccount</a>, einen <a href="https://matrix.to/#/#bitsundbaeume:matrix.org" target="_blank">Community-Matrix-Chat</a>, ein <a href="https://discourse.bits-und-baeume.org" target="_blank">Community-Diskussionsbrett</a>, ein <a href="https://wiki.bits-und-baeume.org/struktur-der-bewegung/" target="_blank">Community-Wiki</a> und einen <a href="https://mastodon.bits-und-baeume.org/@bits_und_baeume" target="_blank">Community-Mastodon</a>.
                    </p>
                </article>

                <article>
                    <h3 class="bold">Aktuelle Termine</h3>
                    <p>Unser aktueller Terminkalender ist <a href="https://discourse.bits-und-baeume.org/calendar" target="_blank">hier</a>.</p>
                </article>

                <article>
                    <h3 class="bold">Buch: <em>Was Bits&Bäume verbindet</em></h3>
                    <p>Das <a href="https://www.oekom.de/nc/buecher/gesamtprogramm/buch/was-bits-baeume-verbindet.html" target="_blank">Buch zur Konferenz</a> ist da. Dank an die successfully fundende Crowd!</p>
                </article>

                <article>
                    <h3 class="bold">Berliner Gesprächsreihe <em>Forum Bits&Bäume</em></h3>
                    <p>Über 2 Jahre hinweg diskutieren wir <a href="/forum/<?php echo $lang; ?>">in Expert*innenrunden die Gestaltung der Digitalisierung</a>.</p>
                </article>
            </section>

            <section class="switch twitter">
                <?php require 'components/twitter.php'; ?>

            </section>

            <div class="control">
                <div class="news active">
                    <div class="icon"></div>
                    <p>Aktuelles</p>
                </div>
                <div class="twitter">
                    <div class="icon"></div>
                    <p>#bitsundbäume</p>
                </div>
            </div>
    <?php } ?>

</aside>

<script>
    if (!KolleDeviceDetector.isMobile()) {
        const ps = new PerfectScrollbar('aside .switch', {
            wheelSpeed: 0.2,
            wheelPropagation: false,
            minScrollbarLength: 10,
            suppressScrollX: true
        });
    };

    $news = $('section.news');
    $twitter = $('section.twitter');
    $newsBtn = $('.control .news');
    $twitterBtn = $('.control .twitter');

    function showTwitter() {
        $twitterBtn.addClass('active');
        $twitter.addClass('active');
        $newsBtn.removeClass('active');
        $news.removeClass('active');
    }

    function showNews() {
        $newsBtn.addClass('active');
        $news.addClass('active');
        $twitterBtn.removeClass('active');
        $twitter.removeClass('active');
    }

    $twitterBtn.click(function() {
        showTwitter();
    });

    $newsBtn.click(function() {
        showNews();
    });

    $portraits = $('.portrait');

    function switchSidebar() {
        if ($news.hasClass('active')) {
            showTwitter();
        } else {
            showNews();
        }

        ps.update();
    }

    var index = 0;
    // setInterval(function () {
    //     switchSidebar();
    // }, 10000)
</script>
