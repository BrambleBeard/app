<div id="vueApp">
<form action="generate">

    <div class="notification is-warning">
        <h3 class="title is-2 has-text-centered" id="randomString">{{ password }}</h3>
    </div>
    <!-- /.notification -->

    <div class="field">
        <label class="label">Length of Password (4-64)</label>
        <p class="control">
            <input class="input" type="number" name="passwordLength" min="4" max="64" v-model.number="passwordLength">
        </p>
    </div>
    <!-- /.field -->

    <div class="field">
        <label class="label">How many Digits?</label>
        <p class="control">
            <input class="input" type="number" name="passwordLength" min="0" max="32" v-model.number="digitCount">
        </p>
    </div>
    <!-- /.field -->

    <div class="field">
        <label class="label">How many Special Characters?</label>
        <p class="control">
            <input class="input" type="number" name="passwordLength" min="0" max="32" v-model.number="charCount">
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
</div>

<script>
    var vm = new Vue({
        el: '#vueApp',
        data: {
            password: '',
            passwordLength: 12,
            digitCount: 2,
            charCount: 0
        },
        methods: {
            generatePassword: function(){
                var alnu = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                var generated = Array(parseInt(this.passwordLength)).join().split(',').map(function() {
                    return alnu.charAt(Math.floor(Math.random() * alnu.length));
                }).join('');
                this.password = generated;
                console.log("Generated new password: "+generated);
            }
        }
    });

    vm.generatePassword();
</script>
