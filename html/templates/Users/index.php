<?= $this->Html->css(['login']) ?>
<div class="form-wrapper">
    <h1>Sign In</h1>
    <?= $this->Form->create(null, ['url' => ['controller' => 'Users','action' => 'login']]); ?>
        <div class="form-item">
            <label for="email"></label>
            <input type="email" name="email" required="required" placeholder="Email Address"></input>
        </div>
        <div class="form-item">
            <label for="password"></label>
            <input type="password" name="password" required="required" placeholder="Password"></input>
        </div>
        <div class="button-panel">
            <input type="submit" class="button" title="Sign In" value="Sign In"></input>
        </div>
    <?= $this->Form->end(); ?>
    <div class="form-footer">
        <p><a href="#">Create an account</a></p>
        <p><a href="#">Forgot password?</a></p>
    </div>
</div>
