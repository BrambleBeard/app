<form action="generate">

    <div class="notification is-warning">
        <h3 class="title is-2 has-text-centered" id="randomString"></h3>
    </div>
    <!-- /.notification -->

    <div class="field">
        <label class="label">Length of Password</label>
        <p class="control">
            <input class="input" type="number" name="passwordLength" min="4" max="64" value="12">
        </p>
    </div>
    <!-- /.field -->

    <div class="field">
        <label class="label">How many Digits?</label>
        <p class="control">
            <input class="input" type="number" name="passwordLength" min="0" max="32" value="0">
        </p>
    </div>
    <!-- /.field -->

    <div class="field">
        <label class="label">How many Special Characters?</label>
        <p class="control">
            <input class="input" type="number" name="passwordLength" min="0" max="32" value="0">
        </p>
    </div>
    <!-- /.field -->

    <div class="field is-grouped">
        <p class="control">
            <button class="button is-warning">Regenerate</button>
        </p>
        <p class="control">
            <button class="button is-primary">Copy</button>
        </p>
    </div>
    <!-- /.field -->

</form>

<script>
    var stringLength = 18;
    var randomString = randomizeString(stringLength);
    applyStringToId( "randomString", randomString );

    function randomizeString( lengthOfString ) {
        var alnu = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        var ret = Array(lengthOfString).join().split(',').map(function() {
            return alnu.charAt(Math.floor(Math.random() * alnu.length));
        }).join('');
        return ret;
    }

    function applyStringToId( htmlId, randomString ){
        document.querySelector(`#${htmlId}`).innerHTML = randomString;
    };

    document.getElementById('randomizer').onclick = function(e){
        var randomString = randomizeString(stringLength);
        applyStringToId( "randomString", randomString );
    };
</script>