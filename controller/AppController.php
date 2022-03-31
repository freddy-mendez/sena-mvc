<?php

require_once('AprendizController.php');
require_once('InstructorController.php');
require_once('CursoController.php');
require_once('UsuarioController.php');

class AppController {
    private $aprendiz;
    private $instructor;
    private $curso;
    private $user;

    public function __construct() {
    }

    public function main() {
        if (!isset($_SESSION['user'])) {
            if (isset($_GET['action'])) {
                if (!$this->user) {
                    $this->user = new UsuarioController();
                }
                $this->user->main();
            } else {
                include_once('view/login.php');
                return;
            }
        } else {
            if (isset($_GET['action']) && $_GET['action'] == 'logout') {
                unset($_SESSION['user']);
                header('Location: index.php');
                return;
            } else if (isset($_GET['action']) && $_GET['action'] == 'save-foto') {
                $this->user->main();
            }
        }

        $obj = isset($_GET['obj'])?$_GET['obj'] : 'menu';
        if ($obj == 'menu') {
            include_once('view/menu.php');
            return;
        } else if ($obj == 'aprendiz') {
            if (!$this->aprendiz) {
                $this->aprendiz = new AprendizController();
            }
            $this->aprendiz->main();
        } else if ($obj == 'instructor') {
            if (!$this->instructor) {
                $this->instructor = new InstructorController();
            }
            $this->instructor->main();
        } else if ($obj == 'curso') {
            if (!$this->curso) {
                $this->curso = new CursoController();
            }
            $this->curso->main();
        }
    }
}

?>