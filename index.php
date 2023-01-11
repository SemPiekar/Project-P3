    <?php
    include __DIR__ . "/header.php";
    ?>
    <section class="landingPage">
        <?php
        include __DIR__ . "/Includes/nav.php";
        ?>
        <h1 id="typingContainer"></h1>
        <h2 id="typingContainer1"></h2>
    </section>
    <section class="games">
        <div class="games__list"></div>
        <div class="games__list"></div>
        <div class="games__cards">
            <div class="games__box">
                <div class="paradox_interactive">
                    <video src="/Videos/paradox_interactive.mp4" autoplay muted></video>
                </div>
            </div>
            <div class="games__box">
                <div class="ea">
                    <video src="/Videos/ea.mp4" autoplay muted></video>
                </div>
            </div>
            <div class="games__box"></div>
            <div class="games__box"></div>
            <div class="games__box"></div>
        </div>
    </section>
    <?php
    include __DIR__ . "/Includes/footer.php";
    ?>