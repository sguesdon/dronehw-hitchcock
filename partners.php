<?php
    $baseUrl = get_template_directory_uri();
    $partners = json_decode(file_get_contents(__DIR__ . '/partners.json'));
?>
    <div class="posts">
        <?php
        foreach($partners as $partner) {
            echo '
            <a
                class="post post-8 type-post status-publish format-standard has-post-thumbnail hentry"
                href="' . $partner->href . '"
                style="background-image:url(' . $baseUrl . '/images/partners/' . $partner->src . ')"
                target="_blank"
            >
                <div class="post-embed"></div>
                <div class="post-overlay">
                    <div class="archive-post-header">
                        <div class="archive-post-title">
                            ' . $partner->title . '
                        </div>
                    </div>
                </div>
            </a>';
        }
        ?>
    </div>
