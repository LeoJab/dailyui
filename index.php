<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>DailyUI</title>

    <link rel="stylesheet" href="ASSET/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Farro:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="allIndex">
        <?php include_once(__dir__ . '/templates/menu.html') ?>
        <div id="indexContenu">
            <div id="integration">
                <?php 
                    if(isset($_GET['page'])) {
                        $page = $_GET['page'];
                    } else {
                        $page = NULL;
                    }

                    switch($page) {
                        case '1':
                            include_once(__dir__ . '/dailyui/1.php');
                            break;
                        case '2':
                            include_once(__dir__ . '/dailyui/2.php');
                            break;
                        case '3':
                            include_once(__dir__ . '/dailyui/3.php');
                            break;
                        case '4':
                            include_once(__dir__ . '/dailyui/4.php');
                            break;
                        case '5':
                            include_once(__dir__ . '/dailyui/5.php');
                            break;
                        case '6':
                            include_once(__dir__ . '/dailyui/6.php');
                            break;
                        case '7':
                            include_once(__dir__ . '/dailyui/7.php');
                            break;
                        case '8':
                            include_once(__dir__ . '/dailyui/8.php');
                            break;
                        case '9':
                            include_once(__dir__ . '/dailyui/9.php');
                            break;
                        case '10':
                            include_once(__dir__ . '/dailyui/10.php');
                            break;
                        default:
                            $page = "1";
                            include_once(__dir__ . '/dailyui/1.php');
                            break;
                    };
                ?>
            </div>
            <div id="menuBas">
                <p class="prompt"><?php echo $prompt ?></p>
                <div class="nav">
                    <a href="/index.php?page=<?php echo ($page - 1) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg>
                    </a>
                    <p><?php echo $page ?> / 100</p>
                    <a href="/index.php?page=<?php echo ($page + 1) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right"><path d="m9 18 6-6-6-6"/></svg>
                    </a>
                </div>
                <div class="liens">
                    <a class="blue" href="#<?php echo $page ?>" title="Maquette" target="_blank">
                        Maquette
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-figma"><path d="M5 5.5A3.5 3.5 0 0 1 8.5 2H12v7H8.5A3.5 3.5 0 0 1 5 5.5z"/><path d="M12 2h3.5a3.5 3.5 0 1 1 0 7H12V2z"/><path d="M12 12.5a3.5 3.5 0 1 1 7 0 3.5 3.5 0 1 1-7 0z"/><path d="M5 19.5A3.5 3.5 0 0 1 8.5 16H12v3.5a3.5 3.5 0 1 1-7 0z"/><path d="M5 12.5A3.5 3.5 0 0 1 8.5 9H12v7H8.5A3.5 3.5 0 0 1 5 12.5z"/></svg>
                    </a>
                    <a class="blue" href="#<?php echo $page ?>" title="Code Source" target="_blank">
                        Code Source
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-github"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>