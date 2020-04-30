<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Feasy</title>
 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <!-- ナビゲーションバー -->
  <header id="header" role="banner">
    <nav class="navbar navbar-expand navbar-light bg-primary pt-0 pb-0" >
      <a class="navbar-brand" href="#">Feasy</a>
  </nav>
  </header>
   <!-- -------------------------------------ここまでナビゲーションバー --------------------------------------------->

   <!-- 画像と検索ボックス -->
  <div class="container card">
    <div class="row">
    <img src="images/index.jpg" class=" img-fluid card-img">
    <div class="card-img-overlay d-flex align-items-end pb-lg-5">
        <div class="col-10 mx-auto ">
           <div class="input-group ">
             <input type="text" class="form-control" placeholder="テキスト入力欄">
               <span class="input-group-btn-sm">
                 <button type="button" class="btn btn-primary w-100">検索</button>
               </span>
            </div>


          <div class="container">
            <div class="row">
              <div class="col-4 px-1 px-md-3">
                <!-- <button type="button" class="btn btn-primary w-100 mt-1">検索</button>-->
                  <!-- 切替ボタン -->
                  <button type="button" class="btn btn-primary w-100 mt-1 px-0" data-toggle="modal" data-target="#largeModal">ジャンル</button>
                  <!-- モーダル -->
                    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                      <!-- モーダルのダイアログ本体 -->
                      <div class="modal-dialog modal-lg" role="document">
                        <!-- モーダルのコンテンツ部分 -->
                        <div class="modal-content">
                          <!-- モーダルのヘッダー -->
                          <div class="modal-header">
                            <!-- モーダルのタイトル -->
                            <h5 class="modal-title" id="largeModalLabel">モーダルのタイトル</h5>
                            <!-- 閉じるアイコン -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                          </div>
                          <!-- モーダルの本文 -->
                          <div class="modal-body"><div class="col-4 px-1 px-md-3">
                          <form method='POST' action = "search.php">
                            <input type="submit" class="btn btn-primary w-100 mt-1 px-0" name="genre" value="肉">
                            <input type="submit" class="btn btn-primary w-100 mt-1 px-0" name="genre" value="ラーメン">
                            </form>
                          </div>
                        </div>
                          <!-- モーダルのフッター -->
                          <div class="modal-footer">
                            <!-- 閉じるボタン -->
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-4 px-1 px-md-3">
                  <!-- <button type="button" class="btn btn-primary w-100 mt-1">検索</button>-->
                    <!-- 切替ボタン -->
                    <button type="button" class="btn btn-primary w-100 mt-1 px-0" data-toggle="modal" data-target="#largeModal2">エリア</button>
                    <!-- モーダル -->
                      <div class="modal fade" id="largeModal2" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                        <!-- モーダルのダイアログ本体 -->
                        <div class="modal-dialog modal-lg" role="document">
                          <!-- モーダルのコンテンツ部分 -->
                          <div class="modal-content">
                            <!-- モーダルのヘッダー -->
                            <div class="modal-header">
                              <!-- モーダルのタイトル -->
                              <h5 class="modal-title" id="largeModalLabel">モーダルのタイトル</h5>
                              <!-- 閉じるアイコン -->
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                            </div>
                            <!-- モーダルの本文 -->
                            <div class="modal-body"><div class="col-4 px-1 px-md-3">
                              <button type="button" class="btn btn-primary w-100 mt-1 px-0">博多駅</button>
                              <button type="button" class="btn btn-primary w-100 mt-1 px-0">天神駅</button>
                            </div>
                          </div>
                            <!-- モーダルのフッター -->
                            <div class="modal-footer">
                              <!-- 閉じるボタン -->
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col-4 px-1 px-md-3">
                    <!-- <button type="button" class="btn btn-primary w-100 mt-1">検索</button>-->
                      <!-- 切替ボタン -->
                      <button type="button" class="btn btn-primary w-100 mt-1 px-0" data-toggle="modal" data-target="#largeModal3">現在地</button>
                      <!-- モーダル -->
                        <div class="modal fade" id="largeModal3" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                          <!-- モーダルのダイアログ本体 -->
                          <div class="modal-dialog modal-lg" role="document">
                            <!-- モーダルのコンテンツ部分 -->
                            <div class="modal-content">
                              <!-- モーダルのヘッダー -->
                              <div class="modal-header">
                                <!-- モーダルのタイトル -->
                                <h5 class="modal-title" id="largeModalLabel">モーダルのタイトル</h5>
                                <!-- 閉じるアイコン -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                              </div>
                              <!-- モーダルの本文 -->
                              <div class="modal-body"><div class="col-4 px-1 px-md-3">
                                <button type="button" class="btn btn-primary w-100 mt-1 px-0">？？</button>
                                <button type="button" class="btn btn-primary w-100 mt-1 px-0">？？？</button>
                              </div>
                            </div>
                              <!-- モーダルのフッター -->
                              <div class="modal-footer">
                                <!-- 閉じるボタン -->
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>






    <script src="js/jquery-3.5.0.slim.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>