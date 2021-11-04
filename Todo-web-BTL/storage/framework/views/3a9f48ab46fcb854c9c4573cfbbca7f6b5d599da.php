<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/login.css">
    <title>Login Todo manager</title>
</head>
<body>
    <div class="container">
        <div class="form-login">
            <h1 style="text-align: center; padding:1rem;">Login to Manager System</h1>
            <form method="POST" action="user">
                <?php echo csrf_field(); ?>
                <span>Tài khoản</span>
                
                <input type="text" name="account" id="">
                <label><?php $__errorArgs = ['account'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                <span>Mật khẩu</span>
               
                <input type="password" name="password" id="">
                <label><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
    </div>
</body>
</html>
<style>

</style><?php /**PATH F:\Web\ProjectCNWeb\Todo-web-BTL\resources\views/login.blade.php ENDPATH**/ ?>