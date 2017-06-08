<div id="vueApp">
    <div class="notification is-warning">
        <h3 class="title is-2 has-text-centered" v-bind:class="{ 'animated rubberBand':animationOne, 'animated bounce':animationTwo }" id="randomString">{{ password }}</h3>
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
        <p class="control">
        <label class="checkbox">
            <input type="checkbox" name="includeNumbs" id="includeNumbs" v-model="includeNumbs">
            Include digits (<strong>{{ numbs }}</strong>)
        </label>
        </p>
    </div>
    <!-- /.field -->

    <div class="field">
        <p class="control">
        <label class="checkbox">
            <input type="checkbox" name="includeChars" id="includeChars" v-model="includeChars">
            Include Special Characters (<strong>{{ chars }}</strong>)
        </label>
        </p>
    </div>
    <!-- /.field -->

    <!--<div class="field">
        <label class="label">How many Digits?</label>
        <p class="control">
            <input class="input" type="number" name="passwordLength" min="0" max="32" v-model.number="digitCount">
        </p>
    </div>-->
    <!-- /.field -->

    <!--<div class="field">
        <label class="label">How many Special Characters?</label>
        <p class="control">
            <input class="input" type="number" name="passwordLength" min="0" max="32" v-model.number="charCount">
        </p>
    </div>-->
    <!-- /.field -->

    <div class="field is-grouped">
        <p class="control">
            <button @click.prevent="generatePassword" class="button is-warning">Regenerate</button>
        </p>
        <p class="control">
            <button class="button is-primary"
                v-clipboard:copy="password"
                v-clipboard:success="onCopy"
                v-clipboard:error="onError">Copy</button>
        </p>
    </div>
    <!-- /.field -->
</div>

<script>
    var vm = new Vue({
        el: '#vueApp',
        data: {
            animationOne: false,
            animationTwo: true,
            password: '',
            passwordLength: 12,
            digitCount: 2,
            charCount: 0,
            alpha: "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",
            numbs: "0123456789",
            includeNumbs: false,
            chars: "!@#$%^&*()_-=+",
            includeChars: false
        },
        methods: {
            generatePassword: function(){
                this.animationOne = !this.animationOne;
                this.animationTwo = !this.animationTwo;
                var numbs = "0123456789";
                var chars = "!@#$%^&*()_-=+";
                var passwordCharacters = this.alpha;
                if (this.includeNumbs)
                    passwordCharacters += this.numbs;
                if (this.includeChars)
                    passwordCharacters += this.chars;

                var generated = Array(parseInt(this.passwordLength)).join().split(',').map(function() {
                    return passwordCharacters.charAt(Math.floor(Math.random() * passwordCharacters.length));
                }).join('');
                this.password = generated;
                console.log("Generated new password: "+generated);
            },
            onCopy: function (e) {
                console.info('Copied: ' + e.text);
            },
            onError: function (e) {
                console.info('Copy Failed');
            }
        }
    });

    vm.generatePassword();
</script>
