
    <div class="spacer-40"></div>
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row rb-panel">
                <div class="col-md-12 form-group mt-4">
                     <form>
                        <label for="amount" style="width: 100%;">Amount</label>
                        <input name="tutar" type="number" class="form-control mt-2" id="amount" aria-describedby="amount" placeholder="1" min="1" max="100" value="1">
                        <br>
                        <small id="amount" class="form-text text-muted"> The minimum amount that can be written is 1.</small>
                        <i>Our payment system is not yet active.</i>
                    </form>
                  </div>
            </div>
        </div>
    </div>

    <div class="spacer-10"></div>