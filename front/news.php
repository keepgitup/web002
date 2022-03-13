<fieldset>
    <legend>目前位置：首頁 > 最新文章區</legend>
    <table>
        <tr>
            <td width="30%">標題</td>
            <td width="50%">內容</td>
            <td></td>
        </tr>
        <?php

        // 這裡要改掉 不然後面算total 分頁會還不到5筆就跑分頁出來
        // $total=$News->math("count","*");
        // 先算出總共有幾篇文章$total =$News用math去幫忙算 sh=>1有幾篇文章
        $total = $News->math("count", "*", ['sh' => 1]);
        print_r($total);
        // 多少筆換頁
        $div = 5;
        // 總頁數 =ceil(總篇數/總頁數)   ceil()函數返回大於或等於給定參數的最小可能整數值
        $pages = ceil($total / $div);
        // $現在所處頁數= $_GET['p']存在的話 否則 從第一頁開始
        $now = $_GET['p'] ?? 1;
        // $起始頁=$now-1*5 比方$start=第一頁減1 則落在 0-4的範圍
        $start = ($now - 1) * $div;

        // $撈出所有資料=用文章 去撈出 所有設定為1的文章，限制文章從start開始抓 還有抓div就是看多少筆的資料出來
        $rows = $News->all(['sh' => 1], " limit $start,$div");
        foreach ($rows as $key => $row) {
        ?>
            <tr>
                <!-- 顯示撈出資料的title -->
                <td class="switch"><?= $row['title']; ?></td>
                <td class="switch">
                    <!-- mb_substr就是抓一點滴文字內容 使其呈現 點點點 從零開始抓 抓20個字-->
                    <div class="short"><?= mb_substr($row['text'], 0, 20); ?>...</div>
                    <div class="full" style="display:none"><?= nl2br($row['text']); ?></div>
                </td>
                <td>
                    <?php
                    if (isset($_SESSION['login'])) {
                        $chk = $Log->math('count', '*', ['news' => $row['id'], 'user' => $_SESSION['login']]);
                        if ($chk > 0) {
                            echo "<a class='g' data-news='{$row['id']}' data-type='1'>收回讚</a>";
                        } else {
                            echo "<a class='g' data-news='{$row['id']}' data-type='2'>讚</a>";
                        }
                    }

                    ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div>
        <?php

        if (($now - 1) > 0) {
            $prev = $now - 1;
            echo "<a href='index.php?do=news&p=$prev'> ";
            echo " < ";
            echo " </a>";
        }


        for ($i = 1; $i <= $pages; $i++) {
            $font = ($now == $i) ? '24px' : '16px';
            echo "<a href='index.php?do=news&p=$i' style='font-size:$font'> ";
            echo $i;
            echo " </a>";
        }

        if (($now + 1) <= $pages) {
            $next = $now + 1;
            echo "<a href='index.php?do=news&p=$next'> ";
            echo " > ";
            echo " </a>";
        }

        ?>
        <?php
include_once "./api/getnews.php";
?>
    </div>
</fieldset>
<script>
    $(".switch").on("click", function() {
        $(this).parent().find(".short,.full").toggle()
    })

    $(".g").on("click", function() {
        let type = $(this).data('type')
        let news = $(this).data('news')
        $.post("api/good.php", {
            type,
            news
        }, () => {
            //location.reload()
            switch (type) {
                case 1:
                    $(this).text("讚");
                    $(this).data('type', 2)
                    break;
                case 2:
                    $(this).text("收回讚");
                    $(this).data('type', 1)
                    break;
            }
        })
    })
</script>