<header>
    <h1 class="title"><a href="<?php echo e(URL::route('welcome')); ?>">Cardillo e Associados</a></h1>

    <div class="options">
        <?php if(Auth::check()): ?>
            <div class="dropdown">
              <button class="dropbtn"><i class="fa fa-plus"></i>Outros cadastros</button>
              <div class="dropdown-content">
                    <a href="<?php echo e(url('/clientes/criar')); ?>">Cliente</a>
                  
                  <a href="<?php echo e(url('/contrarios/criar')); ?>">Parte contrária</a>
                  
                    
                    <a href="<?php echo e(url('/pericias/criar')); ?>">Perícias</a>
              </div>
            </div>
        <?php endif; ?>
        <?php if(Auth::check()): ?>
            <div class="dropdown">
              <button class="dropbtn"><i class="fa fa-plus"></i>Listas</button>
              <div class="dropdown-content">
                    <a href="<?php echo e(url('/clientes/')); ?>">Cliente</a>
                    <a href="<?php echo e(url('/advogados/')); ?>">Advogado</a>
                    <a href="<?php echo e(url('/contrarios/')); ?>">Parte contrária</a>
                    
                    
                    <a href="<?php echo e(url('/pericias/')); ?>">Perícias</a>
              </div>
            </div>
        <?php endif; ?>

        <?php if(Route::has('login')): ?>
            <div class="links">
                <?php if(Auth::check()): ?>
                    <a href="<?php echo e(url('/logout')); ?>"><i class="fa fa-sign-out"></i>Sair</a>
                <?php else: ?>
                    <a class="login" href="<?php echo e(url('/login')); ?>"><i class="fa fa-sign-in"></i>Login</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</header>