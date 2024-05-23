<?php 
class UserService {
    protected $email;
    protected $password;
    protected $dataUser;
    protected $userRole;

    public function __construct($email, $password) {
        $this->dataUser = [
            (object) [
                'email' => "wan@gmail.com",
                'password' => "123",
                'role' => "Super Admin"
            ],
            (object) [
                'email' => "wanz@gmail.com",
                'password' => "456",
                'role' => "User"
            ]
        ];
        $this->email = $email;
        $this->password = $password;
    }

    public function login() {
        $user = $this->checkCredentials();
        if($user) {
            $this->userRole = $user->role;
            return $user->email;
        } else {
            return false;
        }
    }

    protected function checkCredentials() {
        foreach ($this->dataUser as $key => $value) {
            if ($value->email == $this->email && $value->password == $this->password){
                return $value;
            }
        }
        return false;
    }

    public function getRole() {
        return $this->userRole;
    }
}
?>
