<!DOCTYPE html>

<html>

    <head>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

        <!-- Bootstrap Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">        
        
        <!-- Bootstrap Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!-- app CSS -->
        <link href="/css/styles.css" rel="stylesheet"/>
        
        <!-- app JavaScript -->
        <script src="/js/scripts.js"></script>
        
        <?php if (isset($sheetinfo)): ?>
            <title><?= htmlspecialchars($sheetinfo['name']) ?></title>
        <?php endif ?>

    </head>
    
    <div class="device-xs visible-xs"></div>
    <div class="device-sm visible-sm"></div>
    <div class="device-md visible-md"></div>
    <div class="device-lg visible-lg"></div>
    
    <body>
        <div class="container-fluid mar-bottom">
        <div class="row">
            <div class="col-xs-12" id="shoplist">
                
                <div id="top">
                        <?php if (isset($partner) && isset($sheetinfo)): ?>
                            <h1><?= htmlspecialchars($sheetinfo['name']) ?>: <?= htmlspecialchars($partner) ?> Referrals</h1>
                        <?php endif ?>
                        
                        <?php if (isset($sheetinfo)): ?>
                            <p><em><?= htmlspecialchars($sheetinfo['text']) ?></p></em>
                        <?php endif ?>
                </div>
                <hr>
                <div id="middle">

                        <?php if (isset($items)): ?>
                        <?php foreach ($items as $item): ?>
                            <h2><?= htmlspecialchars($item['category']) ?></h2>
                            <ul><li><?= implode('</li><li>', $item['areas']) ?></li></ul>
                        <?php endforeach ?>
                        <?php endif ?>
                </div>
                
            </div>
            
            <div id="entrybar" class="col-xs-12">
                <div class="entryform">
                    <form class="form-inline">
                        
                        <div class="form-group">
                        <label for="startup">Company Name</label>
                        <input type="text" class="form-control" id="startup" placeholder="StartupX">
                        </div>
                        
                        <div class="form-group">
                        <label for="name">Contact</label>
                        <input type="text" class="form-control" id="name" placeholder="Jane Doe">
                        </div>
                        
                        <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="jane@startupx.com">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Refer</button>
    
                    </form>
                </div> <!-- .entryform -->
            </div> <!-- #entrybar -->

        </div> <!-- row -->
        </div> <!-- container -->

    </body>

</html>