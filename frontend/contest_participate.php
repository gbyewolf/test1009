<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../css/header03.css">
    <link rel="stylesheet" href="../css/contest_nav_footer.css">
    <link rel="stylesheet" href="../css/contest_participate.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
</head>

<body>
     <?php include("../hd.html"); ?>
    <div id="JH">
        <nav class="topNav">
            <ul>
                <li>賽制說明</li>
                <li>人氣票選</li>
                <li><h1>
                    歷屆冠軍
                </h1></li>
                <li><h1>
                    我要投稿
                </h1></li>
            </ul>
        </nav>
        <div class="container">
            <div class="step">
                <ol>
                    <li>1.同意規範</li>
                    <li>2.上傳資料</li>
                    <li>3.投稿成功</li>
                </ol>
                <form action="#" name="formStep1" class="formStep" id="formStep1">
                    <div class="rule">
                        <p>請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定請配合我們的規定
                        </p>
                    </div>
                    <input type="radio" id="submitStep1" name="submitStep1">
                    <label for="submitStep1"><span></span>我同意以上規定</label>
                    <button type="submit" class="nextBtn">下一步</button>
                </form>
                <form action="#" name="formStep2" class="formStep" id="formStep2">
                    <p>&frasl;&frasl;&emsp;參賽者資料&emsp;&frasl;&frasl;</p>
                    <div>
                        <label for="pId">身分證正面：</label>
                        <label for="pId" class="fileUpload">上傳檔案</label>
                        <input type="file" id="pId" name="pId" class="fileUpload">
                        <br>
                        <span class="file">檔案名稱：</span>
                        <span class="file" id="fileName">請選擇上傳檔案</span>
                        <div>
                            <img src="https://fakeimg.pl/324x200/" alt="正面預覽">
                            <span>點擊放大圖片</span>
                        </div>
                    </div>
                    <div class="btn">
                        <button type="button" class="backBtn">上一步</button>
                        <button type="submit" class="nextBtn">下一步</button>
                    </div>
                </form>
                <form action="#" name="formStep3" class="formStep" id="formStep3">
                    <p>&frasl;&frasl;&emsp;作品資料&emsp;&frasl;&frasl;</p>
                    <div>
                        <label for="fType">作品種類：</label>
                        <select id="fType" name="fType">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                            <option value="">8</option>
                        </select>
                        <br>
                        <label for="fName">作品名稱：</label>
                        <input type="text" id="fName">
                        <br>
                        <label for="fConcept" class="fConcept">設計理念：</label>
                        <textarea name="fConcept" id="fConcept" cols="80" rows="10"></textarea>
                        <br>
                        <div>
                            <div>
                                <label for="draft">設計稿：</label>
                                <label for="draft" class="fileUpload">上傳檔案</label>
                                <input type="file" id="draft" name="draft" class="fileUpload">
                                <br>
                                <span class="file">檔案名稱：</span>
                                <span class="file" id="draftName">請選擇上傳檔案</span>
                                <div>
                                    <img src="https://fakeimg.pl/250x150/" alt="設計稿">
                                    <span>點擊放大圖片</span>
                                </div>
                            </div>
                            <div>
                                <label for="draw">設計圖：</label>
                                <label for="draw" class="fileUpload">上傳檔案</label>
                                <input type="file" id="draw" name="draw" class="fileUpload">
                                <br>
                                <span class="file">檔案名稱：</span>
                                <span class="file" id="drawName">請選擇上傳檔案</span>
                                <div>
                                    <img src="https://fakeimg.pl/250x150/" alt="設計圖">
                                    <span>點擊放大圖片</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn">
                        <button type="button" class="backBtn">上一步</button>
                        <button type="submit" class="nextBtn">下一步</button>
                    </div>
                </form>
                <div>
                    <p>恭喜您完成此次投稿!</p>
                    <a>前往參觀其他作品</a>
                </div>
            </div>
        </div>
        <!-- <footer>

        </footer> -->
    </div>
    <script src="../js/header.js"></script>
</body>

</html>