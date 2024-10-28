<?php
function aside(): void
{ ?>

    <aside id="sidebar">
        <div class="container">
            <div class="nav-items">
                <a <?= urlIs('/'); ?> href="/">Home</a>
                <a <?= urlIs('/clients'); ?> href="/clients">Clients</a>
            </div>
        </div>
    </aside>

<?php } ?>