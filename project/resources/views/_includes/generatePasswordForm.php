<form action="generate">

    <div class="notification is-warning">
        <h3 class="title is-2 has-text-centered" id="randomString">{{ password }}</h3>
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
            <button @click.prevent="generatePassword" class="button is-warning">Regenerate</button>
        </p>
        <p class="control">
            <button class="button is-primary">Copy</button>
        </p>
    </div>
    <!-- /.field -->

</form>

<script>
    var vm = new Vue({
        // We have to set delimiters because Jekyll and Vue use the same
        // mustache templating.
        // delimiters: ['${', '}'],
        el: '#layout',
        data: {
            password: '',
            passwordLength: 12
        },
        methods: {
            generatePassword: function(){
                var alnu = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                var generated = Array(this.passwordLength).join().split(',').map(function() {
                    return alnu.charAt(Math.floor(Math.random() * alnu.length));
                }).join('');
                this.password = generated;
                console.log("Generated new password: "+generated);
            }
        }
    });

    vm.generatePassword();
</script>
