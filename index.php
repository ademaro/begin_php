<?php
include('header.php');

$articles = [
    1 => [
      'title' => 'Первая статья',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscin    g elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante    . Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper c    onsequat est, eu porta velit mollis nec.',
    ], 
    2 => [
      'title' => 'Вторая новость',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscin    g elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante    . Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper c    onsequat est, eu porta velit mollis nec.',
    ],
    3 => [
      'title' => 'Ещё кое-что',
      'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscin    g elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante    . Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper c    onsequat est, eu porta velit mollis nec.',
    ],
];
?>        
        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>article header h1</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec.</p>
                    </header>
                    <?php
                        foreach($articles as $key => $value) {
                    ?>
                    <section>
                        <h2><?php echo $value['title']; ?></h2>
                        <p><?php echo $value['text']; ?></p>
                        <small>Индекс статьи: <?php echo $key; ?></small>
                    </section>
                    <?php    
                        }
                    ?>                    
                    <footer>
                        <h3>article footer h3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor.</p>
                    </footer>
                </article>

                <aside>
                    <h3>aside</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->
<?php
include('footer.php');
?>        
