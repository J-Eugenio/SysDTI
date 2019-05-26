<?php

    require_once '../../model/usuario/Usuario.class.php';

    class usuario_DAO extends usuario_class{
        protected $tabela = 'usuario';
        
        public function findUnic($id){
            try{
                $sql = "SELECT * FROM $this->tabela WHERE id = :id";
                $exec = DB::prepare($sql);
                $exec->bindValue(':id', $id, PDO::PARAM_INT);
                $exec->execute();
                return $exec->fetch();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
        public function findAll($id){
            try{
                $sql = "SELECT * FROM $this->tabela ";
                $exec = DB::prepare($sql);
                $exec->execute();
                return $exec->fetchAll();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
        public function insert(){
            try{
                $sql = "INSERT INTO $this->tabela(login, senha, nome, cpf, email, nivel, acesso)
             VALUES (:login, :senha, :nome, :cpf, :email, :nivel, :acesso)";
                $exec = DB::prepare($sql);
                $exec->bindParam(':login',$this->login);
                $exec->bindParam(':senha',$this->nome);
                $exec->bindParam(':cpf',$this->cpf);
                $exec->bindParam(':email',$this->email);
                $exec->bindParam(':nivel',$this->nivel);
                $exec->bindParam(':acesso',$this->acesso);
                return $exec->execute();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
        public function update($id){
            try{
                $sql = "UPDATE $this->tabela SET login = :login, senha = :senha, nome = :nome,
                cpf = :cpf, email = :email, nivel = :nivel, acesso = :acesso WHERE id = :id";
                $exec = DB::prepare($sql);
                $exec->bindParam(':id', $id, PDO::PARAM_INT);
                $exec->bindParam(':login', $this->login);
                $exec->bindParam(':senha', $this->senha);
                $exec->bindParam(':cpf', $this->cpf);
                $exec->bindParam(':email', $this->email);
                $exec->bindParam(':nivel', $this->nivel);
                $exec->bindParam(':acesso', $this->acesso);
                return $exec->execute();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }

        }
        public function delete($id){
            try{
                $sql = "DELETE FROM $this->tabela WHERE id = :id";
                $exec = DB::prepare($sql);
                $exec->bindParam(':id', $id. PDO::PARAM_INT);
                return $exec->execute();
            }catch(PDOException $erro){
                echo $erro->getMessage();
            }
        }
        public function autenticar($email,$senha){
           try{
                $sql = "SELECT id,nome,email,senha FROM $this->tabela 
                WHERE email = :email AND senha = :senha";
                $exec = DB::prepare($sql);
                $exec->bindParam(':email', $email);
                $exec->bindParam(':senha', $senha);
                $exec->execute();
                $users = $exec->fetchAll(PDO::FETCH_ASSOC);
                if(count($users) <= 0){
                    echo "Login ou senha Incorretos!";
                }else{
                    $user = $users[0];
                    session_start();
                    $_SESSION['logged_in'] = true;
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['user_name'] = $user['nome'];  
                    echo "SESSION<br>";
                    print_r($_SESSION);
                    echo "<br>LOGIN OK!!";
                    echo "<br>Aqui da um redirect pra pagina principal";
                }
           }catch(PDOException $erro){
               echo $erro->getMessage();
               echo "ERRO NO LOGIN ";
           }
        }
    }
?>