<?php
include_once('template.php');
$options = [];
$options['HeadFoot'] = <<<EOF
<link rel="stylesheet" href="css/pure-min.css">
<link rel='stylesheet' href='css/my.css?2'>
EOF;
$options['BodyMain'] = <<<EOF
    <div class="my-content">
        <table class="pure-table pure-table-bordered my-table">
            <thead>
                <tr class="my-tr">
                    <th colspan="2" class="bible-type-old selected">
                        <strong class="bible-title">旧 约</strong>
                    </th>
                    <th colspan="2" class="bible-type-new">
                        <strong class="bible-title">新 约</strong>
                    </th>
                </tr>
            </thead>
            <tbody class="bible-old">
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Genesis.html';"><strong>创</strong><span>创世记</span></td>
                    <td onclick="window.location.href='chapter/Exodus.html';"><strong>出</strong><span>出埃及记</span></td>
                    <td onclick="window.location.href='chapter/Leviticus.html';"><strong>利</strong><span>利未记</span></td>
                    <td onclick="window.location.href='chapter/Numbers.html';"><strong>民</strong><span>民数记</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Deuteronomy.html';"><strong>申</strong><span>申命记</span></td>
                    <td onclick="window.location.href='chapter/Joshua.html';"><strong>书</strong><span>约书亚记</span></td>
                    <td onclick="window.location.href='chapter/Judges.html';"><strong>士</strong><span>士师记</span></td>
                    <td onclick="window.location.href='chapter/Ruth.html';"><strong>得</strong><span>路得记</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Samuel1.html';"><strong>撒上</strong><span>撒母耳记上</span></td>
                    <td onclick="window.location.href='chapter/Samuel2.html';"><strong>撒下</strong><span>撒母耳记下</span></td>
                    <td onclick="window.location.href='chapter/Kings1.html';"><strong>王上</strong><span>列王纪上</span></td>
                    <td onclick="window.location.href='chapter/Kings2.html';"><strong>王下</strong><span>列王纪下</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Chronicles1.html';"><strong>代上</strong><span>历代志上</span></td>
                    <td onclick="window.location.href='chapter/Chronicles2.html';"><strong>代下</strong><span>历代志下</span></td>
                    <td onclick="window.location.href='chapter/Ezra.html';"><strong>拉</strong><span>以斯拉记</span></td>
                    <td onclick="window.location.href='chapter/Nehemiah.html';"><strong>尼</strong><span>尼希米记</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Esther.html';"><strong>斯</strong><span>以斯帖记</span></td>
                    <td onclick="window.location.href='chapter/Job.html';"><strong>伯</strong><span>约伯记</span></td>
                    <td onclick="window.location.href='chapter/Psalms.html';"><strong>诗</strong><span>诗篇</span></td>
                    <td onclick="window.location.href='chapter/Proverbs.html';"><strong>箴</strong><span>箴言</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Ecclesiastes.html';"><strong>传</strong><span>传道书</span></td>
                    <td onclick="window.location.href='chapter/SongOfSongs.html';"><strong>歌</strong><span>雅歌</span></td>
                    <td onclick="window.location.href='chapter/Isaiah.html';"><strong>赛</strong><span>以赛亚书</span></td>
                    <td onclick="window.location.href='chapter/Jeremiah.html';"><strong>耶</strong><span>耶利米书</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Lamentations.html';"><strong>哀</strong><span>耶利米哀歌</span></td>
                    <td onclick="window.location.href='chapter/Ezekiel.html';"><strong>结</strong><span>以西结书</span></td>
                    <td onclick="window.location.href='chapter/Daniel.html';"><strong>但</strong><span>但以理书</span></td>
                    <td onclick="window.location.href='chapter/Hosea.html';"><strong>何</strong><span>何西阿书</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Joel.html';"><strong>珥</strong><span>约珥书</span></td>
                    <td onclick="window.location.href='chapter/Amos.html';"><strong>摩</strong><span>阿摩司书</span></td>
                    <td onclick="window.location.href='chapter/Obadiah.html';"><strong>俄</strong><span>俄巴底亚书</span></td>
                    <td onclick="window.location.href='chapter/Jonah.html';"><strong>拿</strong><span>约拿书</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Micah.html';"><strong>弥</strong><span>弥迦书</span></td>
                    <td onclick="window.location.href='chapter/Nahum.html';"><strong>鸿</strong><span>那鸿书</span></td>
                    <td onclick="window.location.href='chapter/Habakkuk.html';"><strong>哈</strong><span>哈巴谷书</span></td>
                    <td onclick="window.location.href='chapter/Zephaniah.html';"><strong>番</strong><span>西番雅书</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Haggai.html';"><strong>该</strong><span>哈该书</span></td>
                    <td onclick="window.location.href='chapter/Zechariah.html';"><strong>亚</strong><span>撒迦利亚书</span></td>
                    <td onclick="window.location.href='chapter/Malachi.html';"><strong>玛</strong><span>玛拉基书</span></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody class="bible-new" style="display: none;">
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Matthew.html';"><strong>太</strong><span>马太福音</span></td>
                    <td onclick="window.location.href='chapter/Mark.html';"><strong>可</strong><span>马可福音</span></td>
                    <td onclick="window.location.href='chapter/Luke.html';"><strong>路</strong><span>路加福音</span></td>
                    <td onclick="window.location.href='chapter/John.html';"><strong>约</strong><span>约翰福音</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Acts.html';"><strong>徒</strong><span>使徒行传</span></td>
                    <td onclick="window.location.href='chapter/Romans.html';"><strong>罗</strong><span>罗马书</span></td>
                    <td onclick="window.location.href='chapter/Corinthians1.html';"><strong>林前</strong><span>哥林多前书</span></td>
                    <td onclick="window.location.href='chapter/Corinthians2.html';"><strong>林后</strong><span>哥林多后书</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Galatians.html';"><strong>加</strong><span>加拉太书</span></td>
                    <td onclick="window.location.href='chapter/Ephesians.html';"><strong>弗</strong><span>以弗所书</span></td>
                    <td onclick="window.location.href='chapter/Philippians.html';"><strong>腓</strong><span>腓立比书</span></td>
                    <td onclick="window.location.href='chapter/Colossians.html';"><strong>西</strong><span>歌罗西书</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Thessalonians1.html';"><strong>帖前</strong><span>帖撒罗尼迦前书</span></td>
                    <td onclick="window.location.href='chapter/Thessalonians2.html';"><strong>帖后</strong><span>帖撒罗尼迦后书</span></td>
                    <td onclick="window.location.href='chapter/Timothy1.html';"><strong>提前</strong><span>提摩太前书</span></td>
                    <td onclick="window.location.href='chapter/Timothy2.html';"><strong>提后</strong><span>提摩太后书</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Titus.html';"><strong>多</strong><span>提多书</span></td>
                    <td onclick="window.location.href='chapter/Philemon.html';"><strong>门</strong><span>腓利门书</span></td>
                    <td onclick="window.location.href='chapter/Hebrews.html';"><strong>来</strong><span>希伯来书</span></td>
                    <td onclick="window.location.href='chapter/James.html';"><strong>雅</strong><span>雅各书</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/Peter1.html';"><strong>彼前</strong><span>彼得前书</span></td>
                    <td onclick="window.location.href='chapter/Peter2.html';"><strong>彼后</strong><span>彼得后书</span></td>
                    <td onclick="window.location.href='chapter/John1.html';"><strong>约一</strong><span>约翰一书</span></td>
                    <td onclick="window.location.href='chapter/John2.html';"><strong>约二</strong><span>约翰二书</span></td>
                </tr>
                <tr class="my-tr">
                    <td onclick="window.location.href='chapter/John3.html';"><strong>约三</strong><span>约翰三书</span></td>
                    <td onclick="window.location.href='chapter/Jude.html';"><strong>犹</strong><span>犹大书</span></td>
                    <td onclick="window.location.href='chapter/Revelations.html';"><strong>启</strong><span>启示录</span></td>
                    <td></td>
                </tr>
            </tbody>
            <thead class="foot">
                <tr class="my-tr">
                    <th colspan="2" class="bible-type-old selected">
                        <strong class="bible-title">旧 约</strong>
                    </th>
                    <th colspan="2" class="bible-type-new">
                        <strong class="bible-title">新 约</strong>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
EOF;
$options['BodyFoot'] = '<script src="js/my.js?1"></script>';
file_put_contents('../index.html', gen_html($options));
echo "success\n";
die;
