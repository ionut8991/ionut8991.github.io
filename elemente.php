<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Elysium Hotel</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-icons.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Articles-Badges-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider-swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>

<body style="background: url(&quot;assets/img/bg.jpg&quot;) center / cover no-repeat;">
    <!-- Start: Navbar With Button -->
    <nav class="navbar navbar-light navbar-expand-md py-3" style="background: url(&quot;assets/img/bg.jpg&quot;) center, var(--bs-indigo);">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="#"><span class="bs-icon-sm bs-icon-rounded bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: var(--bs-navbar-disabled-color);"><i class="icon-diamond"></i></span><span>Elysium Hotel</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="user_acasa.php">Acasa</a></li>
                    <li class="nav-item"><a class="nav-link" href="facilitati.php">Facilitati</a></li>
                    <li class="nav-item"><a class="nav-link" href="elemente.php">Elemente de Programare Web</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="sondaj.php">Sondaj</a></li>
                </ul><span class="navbar-text">Salut,<?php echo $_SESSION['user_name'];?>&nbsp;</span><button class="btn btn-primary" type="button" style="border-bottom-color: var(--bs-navbar-color);background: rgb(253,13,114);" onclick="location.href='Inregistrare/logout.php'">Logout</button>
            </div>
        </div>
    </nav><!-- End: Navbar With Button -->
    <div>
        <h1 id="top">Typography</h1>
        <hr>
        <h1>Heading level 1</h1>
        <h2>Heading level 2</h2>
        <h3>Heading level 3</h3>
        <h4>Heading level 4</h4>
        <h5>Heading level 5</h5>
        <h6>Heading level 6</h6>


        <h2>Paragraph</h2>
        <p>Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipiscing elit. In id risus quis purus mollis lobortis vel ac tellus. Nam pharetra lorem quis dui commodo dapibus. Curabitur aliquet sapien vitae ligula pretium sollicitudin. Sed sed magna eu risus placerat gravida non sit amet augue. Morbi volutpat lobortis imperdiet. Sed elit purus, commodo a mi in, condimentum sagittis urna. Etiam condimentum pharetra cursus. Aliquam erat volutpat. In vel diam nulla. Praesent faucibus augue quis dui vehicula, a consequat est fringilla. Sed nec nisi fermentum, maximus nunc ac, hendrerit lorem. Proin mollis metus in erat dictum egestas. Proin nec ipsum viverra, scelerisque nisi in, faucibus nulla.</p>
        <p>Aliquam erat volutpat. Donec sagittis libero ac justo suscipit laoreet. Suspendisse ut sem vel augue vulputate sodales blandit sit amet metus. Quisque porta consectetur efficitur. Duis venenatis nisl in mollis convallis. Pellentesque quis accumsan orci. Nulla porta arcu quis laoreet sagittis. Aliquam erat volutpat. Suspendisse sagittis, turpis vel posuere suscipit, dolor nunc sodales est, quis cursus dui elit vel nisl.</p>
        <p>Nunc accumsan molestie nisl non malesuada. In egestas tellus lectus, nec venenatis tellus pulvinar vel. Fusce consectetur sodales ante, sed vehicula mauris pulvinar non. Cras tempor ante nec nibh iaculis aliquet. In quis velit non dui dapibus tempus quis sed velit. Morbi a ornare sem. Maecenas ornare molestie ex, sed maximus lorem viverra at. In tincidunt vel purus et suscipit. Aenean aliquam neque et ipsum volutpat, eu laoreet justo vestibulum. Maecenas quam turpis, convallis id nibh efficitur, interdum volutpat elit. Suspendisse potenti. Nulla in vulputate massa.</p>
        <p>Quisque laoreet tincidunt massa, non pulvinar eros euismod sit amet. Maecenas non lorem vitae lorem condimentum posuere. Maecenas ac lectus elit. Nullam feugiat scelerisque interdum. Nullam volutpat tincidunt viverra. Suspendisse egestas venenatis orci. Nunc vehicula ut dolor aliquet finibus.</p>
        <p>Donec tempus vestibulum odio vel consectetur. Donec sed feugiat tortor. Mauris iaculis nunc in orci suscipit, vel egestas orci pulvinar. In dapibus tortor ornare, eleifend eros eu, suscipit neque. Morbi quis pellentesque turpis, sit amet imperdiet augue. Mauris porttitor congue imperdiet. Quisque aliquet id quam a placerat. Fusce maximus in nibh vel ultricies.</p>
        <p>Normal, <abbr title="Abbreviations">abbr</abbr>, <del>del</del>, <dfn>dfn</dfn>, <em>em</em>, <ins>ins</ins>, <mark>mark</mark>, <s>strike through</s>, <small>small</small>, <strong>strong</strong>, <sub>sub</sub>, <sup>sup</sup>, <u>u</u></p>
        <h3>Thai language</h3><!--for checking unicode/multi languages support-->
        <p>กาญจน์ ซังเตผลักดันม้ง แฟนซีอิ่มแปร้ นายพรานยูโร เมคอัพ แรงใจซัพพลายเจ็ต ลอจิสติกส์ คีตกวีแหวว งั้นวิก ฟีดม้งโปรโมทตัวเองแพนดา เวสต์เอนทรานซ์ บรรพชนแบล็คภควัมปติซูฮก ตัวตนโมเดิร์นอัลมอนด์คาแร็คเตอร์ เซลส์แมน ศึกษาศาสตร์เก๋ากี้เช็งเม้งกระดี๊กระด๊าซิง มาม่าโลโก้ฟาสต์ฟู้ดคอมพ์</p>
        <p>แอปเปิ้ลแมกกาซีนยาวี ไอซียูปัจเจกชนเป่ายิ้งฉุบไฮไลท์เตี๊ยม ซีรีส์กัมมันตะแม่ค้าโอเลี้ยงวิน เลิฟต่อยอดผลไม้ พงษ์ดิกชันนารีซูม นิรันดร์ไฟลต์โดมิโน คันธาระเทค ควีนแรงดูดโค้ชแมชชีน ก่อนหน้ารีสอร์ทฮ็อตด็อกเฝอเบลอ ราชานุญาตออร์เดอร์วอเตอร์รุสโซแซมบ้า ก๊วนเหมยโหลยโท่ยซินโดรมดยุค ซื่อบื้อมาร์จินสต๊อกแม่ค้าเฟรชชี่ เพรสโฮสเตสคลับลาเต้ ตัวเองแทคติคฟีเวอร์แอ๊บแบ๊วลิมิต เจล น้องใหม่ซีรีส์แบคโฮแอดมิชชั่นเบนโล</p>
        <p>เฟอร์รี่ เยอบีราแรงผลักเดบิต ราเม็งซีรีส์วาริชศาสตร์แจ๊สสามช่า บึมหน่อมแน้ม แรลลี ไฟต์คอรัปชั่น โมเดิร์นซิตี้เอ็นจีโอป๊อกเซลส์แมน เปปเปอร์มินต์ ไลฟ์พงษ์ศิลปวัฒนธรรมล็อบบี้เทียมทาน ฮ่องเต้หลวงตาบลอนด์ แรงใจแมชชีนเทวาป๋าเธค โพลารอยด์โกลด์สเตชันบอมบ์หมั่นโถว แฮนด์จูนแอลมอนด์ งี้ป๋อหลอสังโฆสี่แยกโพสต์ จูนคอมเพล็กซ์แฟนตาซีเนิร์สเซอรี่ ซานตาคลอสผลไม้เนอะ</p>
        <p>เตี๊ยมแพนดาโบว์ลิ่ง โนติสล้มเหลวแจมหมั่นโถวแจ็กเก็ต พลานุภาพแจ็กพอตโหงว เจ็ต เช็ก เทคโนแครตสุนทรีย์ ทิป จิ๊กซอว์เทียมทานสเตย์ทอล์คบาลานซ์ เพรียวบางเลคเชอร์โฟล์ค กรอบรูป พาสปอร์ตคอรัปชั่นเปโซแมชีนเกจิ มั้ย ยาวี โคโยตี้เลกเชอร์เรตถ่ายทำติ๋ม มั้ยแจ๊กพ็อต สปอร์ตเธค</p>
        <p>เมี่ยงคำ โรแมนติกโทรโข่งไคลแมกซ์เยลลี่ วิวรุมบ้า เดอะ พลานุภาพยิวเสือโคร่งเยนไฟต์ เพลซโครนาเวสต์โหลน สวีทระโงกช็อต จุ๊ยคอนโด สามแยกเอาต์เฝอ เทรลเล่อร์รอยัลตี้แอปเปิ้ลซีรีส์แจ็กพ็อต ทำงานโค้ช สต็อกศิลปวัฒนธรรมศากยบุตร รีโมตดีเจสปอร์ตปฏิสัมพันธ์ ตุ๊กแม่ค้าซูฮกงี้ วอลซ์บ็อกซ์ป๊อปอาร์พีจีปฏิสัมพันธ์ วิภัชภาคลาติน</p>
        <p>By <a href="http://lorem.in.th/" onclick="return false;">lorem.in.th</a></p>

        <h2>Links</h2>
        <p>These are links: <a href="?2017-06-2703%3A30%3A17" onclick="return false;">never visited link (just don't click or it will becomes visited)</a>, <a href=".">visited link</a>. Mouse hover to see effects.</p>

        <h2>Lists</h2>
        <h3>Unordered list</h3>
        <ul>
            <li>List item with a much longer description or more content.</li>
            <li>List item</li>
            <li>List item
                <ul>
                    <li>Nested list item</li>
                    <li>Nested list item</li>
                    <li>Nested list item</li>
                </ul>
            </li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
        </ul>
        <h3>Ordered list</h3>
        <ol>
            <li>List item with a much longer description or more content.</li>
            <li>List item</li>
            <li>List item
                <ol>
                    <li>Nested List Item</li>
                    <li>Nested List Item</li>
                    <li>Nested List Item</li>
                </ol>
            </li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
        </ol>
        <h3>Mixed</h3>
        <ul>
            <li>List item with a much longer description or more content.</li>
            <li>List item</li>
            <li>List item
                <ol>
                    <li>Nested list item</li>
                    <li>Nested list item</li>
                    <li>Nested list item</li>
                </ol>
            </li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
        </ul>
        <ol>
            <li>List item with a much longer description or more content.</li>
            <li>List item</li>
            <li>List item
                <ul>
                    <li>Nested List Item</li>
                    <li>Nested List Item</li>
                    <li>Nested List Item
                        <ol>
                            <li>Nested List Item</li>
                            <li>Nested List Item</li>
                            <li>Nested List Item
                                <ol>
                                    <li>Nested List Item</li>
                                    <li>Nested List Item</li>
                                    <li>Nested List Item
                                        <ul>
                                            <li>Nested list item</li>
                                            <li>Nested list item</li>
                                            <li>Nested list item</li>
                                        </ul>
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li>Nested List Item</li>
                    <li>Nested List Item</li>
                </ul>
            </li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
        </ol>
        <h3>Definition list</h3>
        <dl>
            <dt>Definition list</dt>
            <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.</dd>
            <dt>Lorem ipsum dolor sit amet</dt>
            <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.</dd>
        </dl>
        <h3>Details &amp; Summary</h3>
        <details>
            <summary>Question 1</summary>
            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#" onclick="return false;">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>
            <details>
                <summary>Related documents</summary>
                <ul>
                    <li><a href="#" onclick="return false;">Lorem ipsum dolor sit amet,  consectetuer adipiscing elit.</a></li>
                    <li><a href="#" onclick="return false;">Aliquam tincidunt mauris eu  risus.</a></li>
                    <li><a href="#" onclick="return false;">Lorem ipsum dolor sit amet,  consectetuer adipiscing elit.</a></li>
                    <li><a href="#" onclick="return false;">Aliquam tincidunt mauris eu  risus.</a></li>
                </ul>
            </details>
        </details>
        <details>
            <summary>Question 2</summary>
            <p>Duis consequat metus et eros rutrum, interdum facilisis urna interdum. Etiam facilisis diam in libero varius ultricies id id est. Sed lacinia pellentesque sem vel sagittis.</p>
        </details>

        <h2>Blockquote</h2>
        <blockquote>Those people who think they know everything are a great annoyance to those of us who do.<cite>Isaac Asimov</cite></blockquote>

        <h2>Code</h2>
        <p>This is inline code <code>&lt;div&gt;div element&lt;/div&gt;</code>. This is sample output <samp>sample</samp> And below is block code.</p>
        <pre>
&lt;div&gt;
    div element
    &lt;p&gt;paragraph&lt;/p&gt;
&lt;/div&gt;</pre>
        <p>The input keyboard <kbd>Ctrl</kbd>+<kbd>S</kbd>. This is variable: <var>y</var> = <var>m</var><var>x</var> + <var>b</var></p>

        <h2>Table</h2>
        <table>
            <thead>
            <tr>
                <th>Table heading</th>
                <th>Table heading</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Table footer</th>
                <th>Table footer</th>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <td>Table data</td>
                <td>Table data</td>
            </tr>
            <tr>
                <td>Table data</td>
                <td>Table data</td>
            </tr>
            <tr>
                <td>Table data</td>
                <td>Table data</td>
            </tr>
            <tr>
                <td>Table data</td>
                <td>Table data</td>
            </tr>
            </tbody>
        </table>

        <h2>Form elements</h2>
        <form>
            <fieldset>
                <legend>Input types</legend>
                <p>
                    <label for="input-type-color">Input Color</label><br>
                    <input id="input-type-color" type="color">
                </p>
                <p>
                    <label for="input-type-date">Input Date</label><br>
                    <input id="input-type-date" type="date">
                </p>
                <p>
                    <label for="input-type-datetime-local">Input Datetime-local</label><br>
                    <input id="input-type-datetime-local" type="datetime-local">
                </p>
                <p>
                    <label for="input-type-email">Input Email</label><br>
                    <input id="input-type-email" type="email">
                </p>
                <p>
                    <label for="input-type-file">Input File</label><br>
                    <input id="input-type-file" type="file">
                </p>
                <p>
                    <label for="input-type-hidden">Input Hidden</label><br>
                    <input id="input-type-hidden" type="hidden">
                </p>
                <p>
                    <label for="input-type-month">Input Month</label><br>
                    <input id="input-type-month" type="month">
                </p>
                <p>
                    <label for="input-type-number">Input Number</label><br>
                    <input id="input-type-number" type="number">
                </p>
                <p>
                    <label for="input-type-password">Input Password</label><br>
                    <input id="input-type-password" type="password">
                </p>
                <p>
                    <label for="input-type-range">Input Range</label><br>
                    <input id="input-type-range" type="range">
                </p>
                <p>
                    <label for="input-type-search">Input Search</label><br>
                    <input id="input-type-search" type="search">
                </p>
                <p>
                    <label for="input-type-tel">Input Tel</label><br>
                    <input id="input-type-tel" type="tel">
                </p>
                <p>
                    <label for="input-type-text">Input Text</label><br>
                    <input id="input-type-text" type="text">
                </p>
                <p>
                    <label for="input-type-time">Input Time</label><br>
                    <input id="input-type-time" type="time">
                </p>
                <p>
                    <label for="input-type-url">Input Url</label><br>
                    <input id="input-type-url" type="url">
                </p>
                <p>
                    <label for="input-type-week">Input Week</label><br>
                    <input id="input-type-week" type="week">
                </p>

            </fieldset>
            <p>
                <label fpr="input-type-text-readonly">Input Text read only</label><br>
                <input id="input-type-text-readonly" type="text" readonly="">
            </p>
            <p>
                <label><input type="radio" name="input-radio" value="1"> Input radio option 1</label><br>
                <label><input type="radio" name="input-radio" value="2"> Input radio option 2</label>
            </p>
            <p>
                <label><input type="radio" name="input-radio-disabled" value="1" disabled=""> Input radio option 1</label><br>
                <label><input type="radio" name="input-radio-disabled" value="2" disabled=""> Input radio option 2</label>
            </p>
            <p>
                <label><input type="checkbox"> Input checkbox 1</label><br>
                <label><input type="checkbox"> Input checkbox 2</label>
            </p>
            <p>
                <label><input type="checkbox" disabled=""> Input checkbox 1</label><br>
                <label><input type="checkbox" disabled=""> Input checkbox 2</label>
            </p>
            <p>
                <label for="input-textarea">Textarea</label><br>
                <textarea id="input-textarea"></textarea>
            </p>
            <p>
                <label for="input-textarea-disabled">Textarea disabled</label><br>
                <textarea id="input-textarea-disabled" disabled=""></textarea>
            </p>
            <p>
                <label for="input-textarea-readonly">Textarea readonly</label><br>
                <textarea id="input-textarea-readonly" readonly=""></textarea>
            </p>
            <p>
                <label for="input-select">Select box</label><br>
                <select id="input-select">
                    <optgroup label="Group1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </optgroup>
                    <optgroup label="Group2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </optgroup>
                    <option>out of optgroup</option>
                </select>
            </p>
            <p>
                <label for="input-select-multiple">Select multiple</label><br>
                <select id="input-select-multiple" multiple="">
                    <option>Use Ctrl+click to select multiple options</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </p>
            <p>
                <label for="input-select-disabled">Select disabled</label><br>
                <select id="input-select-disabled" disabled="">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </p>
            <p>
                <button type="button">Normal button</button>
                <button type="submit" onclick="return false;">Submit button</button>
                <button type="reset" onclick="return false;">Reset button</button>
                <button type="button" disabled="">Disabled button</button>
            </p>
            <p>
                <input type="button" value="Input normal button">
                <input type="submit" value="Input submit button" onclick="return false;">
                <input type="reset" value="Input reset button" onclick="return false;">
                <input type="button" value="Input disabled button" disabled="">
            </p>
            <p>
                <a class="button" href="#top" onclick="return false;">Anchor button</a>
                <a class="button disabled" href="#" onclick="return false;">Anchor disabled button</a>
            </p>

            <a href="obiecte.php">Buton pentru utilizare obiecte si clase PHP</a>
        </form>
    </div><!-- Start: Footer Clean -->
    <footer class="text-center py-4">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3">
                <div class="col">
                    <p class="text-muted my-2" style="color: var(--bs-black);font-weight: bold;">Copyright&nbsp;© Gortoescu Ionut Adrian</p>
                </div>
                <div class="col">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item me-4">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                </svg></div>
                        </li>
                        <li class="list-inline-item me-4">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-twitter">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg></div>
                        </li>
                        <li class="list-inline-item">
                            <div class="bs-icon-circle bs-icon-primary bs-icon"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                                </svg></div>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-inline my-2">
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item"></li>
                        <li class="list-inline-item" style="color: var(--bs-black);">Copyright © Elysium Hotel</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!-- End: Footer Clean -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Simple-Slider-swiper-bundle.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>