<!doctype html>
<html lang="pt-br">
    <title>Kifila - SignIn</title>
    <?php 
    require('./components/head.php');
    ?>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 left">
                <div class="row">
                    <div class="col-md-12">
                        <h2 id="msg-welcome">Faça o seu cadastro e NUNCA mais diga: </h2>
                    </div>
                    <div class="col-md-12">
                        <h1 id="logo">Kifila</h1>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6 right">
                <div class="row">
                    <div class="col-md-12 signin">
                        <div>
                            <p id="signin-msg">Já possui uma conta?</p>
                        </div>
                        <div>
                            <a href="pages/signin/signin.php"><button type="button" id="signin-btn">Entrar</button></a>
                        </div>
                    </div>
                </div>
                <div class="row form">
                    <form method="POST" action="backend/cadastro.php">
                        <div class="row">
                            <div class="col-md-12">
                             <div class="mb-2 users">
                                 <div>
                                     <label>Qual o seu tipo de usuário?</label>
                                 </div>
                                 <div class="type-user">
                                     <div class="form-check">
                                         <input class="form-check-input" type="radio" name="type-user" id="user" value="user" onchange="handleChangeUser(this)" checked>
                                         <label class="form-check-label" for="user">
                                           Pessoa física
                                         </label>
                                     </div>
                                     <div class="form-check">
                                         <input class="form-check-input" type="radio" name="type-user" id="company" value="company" onchange="handleChangeUser(this)">
                                         <label class="form-check-label" for="company">
                                           Pessoa Jurídica
                                         </label>
                                     </div>
                                 </div>
                             </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label for="user-name" class="form-label">Nome</label>
                                    <input type="text" name="user-name" id="user-name" class="form-control" placeholder="Digite o seu nome" aria-describedby="help-name" onblur="verificaNome(this)" required>
                                    <small id="help-name" class="help-text hidden">* Seu nome deve possuir mais de 2 letras.</small>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label for="user-email" class="form-label">Email</label>
                                    <input type="email" name="user-email" id="user-email" class="form-control" placeholder="Digite o seu email" aria-describedby="help-email" onblur="verificaEmail(this)" required>
                                    <small id="help-email" class="help-text hidden">* Email inválido</small>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <label for="user-password" class="form-label">Senha</label>
                                    <input type="password" name="user-password" id="user-password" class="form-control" placeholder="Digite a sua senha" aria-describedby="help-password" minlength="8" maxlength="16" onblur="verificaSenha(this)" required>
                                    <small id="help-password" class="help-text hidden">* A senha deve conter entre 8 e 16 caracteres</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2">
                                       <div class="user-pf">
                                            <label for="sexo" class="form-label">Sexo</label>
                                            <select class="form-select" name="gender" id="gender" required>
                                                <option selected disabled>-- Escolha uma opção --</option>
                                                <option value="F">Feminino</option>
                                                <option value="M">Masculino</option>
                                                <option value="">Prefiro não informar</option>
                                            </select>                                         
                                       </div>
                                       <div class="user-pj hidden">
                                                <label for="service" class="form-label">Setor de atuação</label>
                                                <select class="form-select" name="service" id="service" required>
                                                    <option value="0" selected>-- Selecione uma opção --</option>
                                                    <option value="1">Industria</option>
                                                    <option value="2">Serviço</option>
                                                    <option value="3">Outros</option>
                                                </select>
                                       </div>
                                       
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <div class="user-pf">
                                        <label for="user-pf" class="form-label">CPF</label>
                                        <input type="text" name="user-cpf" id="user-cpf" class="form-control" placeholder="Digite o seu CPF" aria-describedby="help-cpf">
                                        <small id="help-cpf" class="help-text"></small>
                                    </div>
                                    <div class="user-pj hidden">
                                        <label for="user-cnpj" class="form-label">CNPJ</label>
                                        <input type="text" name="user-cnpj" id="user-cnpj" class="form-control" placeholder="Digite o seu CNPJ" aria-describedby="help-cnpj">
                                        <small id="help-cnpj" class="help-text"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" name="privacy-policy" id="checkbox-privacy-policy" value="checkedValue" class="custom-control-input" required />
                                        <span class="custom-control-indicator">Eu li e aceito os termos de <button type="button" id="privacy-policy" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a href="#">política de privacidade</a></button></span>
                                      </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="buttons">
                                    <button type="submit" class="btn">Criar Conta</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="staticBackdropLabel">Política de Privacidade</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>SEÇÃO 1 - INFORMAÇÕES GERAIS</h5>
                <p>A presente Política de Privacidade contém informações sobre coleta, uso, armazenamento, tratamento e proteção dos dados pessoais dos usuários e visitantes do site Kifila, com a finalidade de demonstrar absoluta transparência quanto ao assunto e esclarecer a todos interessados sobre os tipos de dados que são coletados, os motivos da coleta e a forma como os usuários podem gerenciar ou excluir as suas informações pessoais.</p>
                <p>Esta Política de Privacidade aplica-se a todos os usuários e visitantes do site Kifila e integra os Termos e Condições Gerais de Uso do site Kifila, devidamente inscrita no CNPJ sob o nº 11.111.111/1111-11, situado em Rua Imaculada Conceição, 1155 - Prado Velho, Curitiba - PR, 80215-901, doravante nominada Kifila.</p>
                <p>O presente documento foi elaborado em conformidade com a Lei Geral de Proteção de Dados Pessoais (Lei 13.709/18), o Marco Civil da Internet (Lei 12.965/14) (e o Regulamento da UE n. 2016/6790). Ainda, o documento poderá ser atualizado em decorrência de eventual atualização normativa, razão pela qual se convida o usuário a consultar periodicamente esta seção.</p>
                
                <h5>SEÇÃO 2 - COMO RECOLHEMOS OS DADOS PESSOAIS DO USUÁRIO E DO VISITANTE?</h5>
                <p>Os dados pessoais do usuário e visitante são recolhidos pela plataforma da seguinte forma:</p>
                <ul>
                    <li>Quando o usuário cria uma conta/perfil na plataforma Kifila: esses dados são os dados de identificação básicos, como nome completo, email, tipo de usuário e CPF. A partir deles, podemos identificar o usuário e o visitante, além de garantir uma maior segurança e bem-estar às suas necessidade. Ficam cientes os usuários e visitantes de que seu perfil na plataforma estará acessível a todos demais usuários e visitantes da plataforma Kifila.</li>
                    <li>Quando um usuário e visitante acessa páginas do site Kifila: as informações sobre interação e acesso são coletadas pela empresa para garantir uma melhor experiência ao usuário e visitante. Estes dados podem tratar sobre as palavras-chaves utilizadas em uma busca, o compartilhamento de um documento específico, comentários, visualizações de páginas, perfis, a URL de onde o usuário e visitante provêm, o navegador que utilizam e seus IPs de acesso, dentre outras que poderão ser armazenadas e retidas.</li>
                    <li>Por intermédio de terceiro: a plataforma Kifila recebe dados de terceiros, como Google, Facebook, Instagram, quando um usuário faz login com o seu perfil de um desses sites. A utilização desses dados é autorizada previamente pelos usuários junto ao terceiro em questão.</li>
                </ul>

                <h5>SEÇÃO 3 - QUAIS DADOS PESSOAIS RECOLHEMOS SOBRE O USUÁRIO E VISITANTE?</h5>
                <p>Os dados pessoais do usuário e visitante recolhidos são os seguintes:</p>
                <ul>
                    <li>Dados para a criação da conta/perfil na plataforma Kifila: nome completo, email, tipo de usuário e CPF.</li>
                    <li>Dados para otimização da navegação: acesso a páginas, palavras-chave utilizadas na busca, recomendações, comentários, interação com outros perfis e usuários, perfis seguidos, endereço de IP.</li>
                    <li>Dados sensíveis: a plataforma poderá coletar os seguintes dados sensíveis do usuário - Sexo</li>
                    <li></li>
                </ul>

                <h5>SEÇÃO 3 - PARA QUE FINALIDADES UTILIZAMOS OS DADOS PESSOAIS DO USUÁRIO E VISITANTE?</h5>
                <p>Os dados pessoais do usuário e do visitante coletados e armazenados pela plataforma Kifila tem por finalidade:</p>
                <ul>
                    <li>Bem-estar do usuário e visitante: aprimorar o produto e/ou serviço oferecido, facilitar, agilizar e cumprir os compromissos estabelecidos entre o usuário e a empresa, melhorar a experiência dos usuários e fornecer funcionalidades específicas a depender das características básicas do usuário.</li>
                    <li>Melhorias da plataforma: compreender como o usuário utiliza os serviços da plataforma, para ajudar no desenvolvimento de negócios e técnicas.</li>
                    <li>Anúncios: apresentar anúncios personalizados para o usuário com base nos dados fornecidos.</li>
                    <li>Comercial: os dados são usados para personalizar o conteúdo oferecido e gerar subsídio à plataforma para a melhora da qualidade no funcionamento dos serviços.</li>
                    <li>Previsão do perfil do usuário: tratamento automatizados de dados pessoais para avaliar o uso na plataforma.</li>
                    <li>Dados de cadastro: para permitir o acesso do usuário a determinados conteúdos da plataforma, exclusivo para usuários cadastrados</li>
                    <li>Dados de contrato: conferir às partes segurança jurídica e facilitar a conclusão do negócio.</li>
                </ul>
                <p>O tratamento de dados pessoais para finalidades não previstas nesta Política de Privacidade somente ocorrerá mediante comunicação prévia ao usuário, de modo que os direitos e obrigações aqui previstos permanecem aplicáveis.</p>

                <h5>SEÇÃO 4 - POR QUANTO TEMPO OS DADOS PESSOAIS FICAM ARMAZENADOS?</h5>
                <p>Os dados pessoais do usuário e visitante são armazenados pela plataforma durante o período necessário para a prestação do serviço ou o cumprimento das finalidades previstas no presente documento, conforme o disposto no inciso I do artigo 15 da Lei 13.709/18.</p>
                <p>Os dados podem ser removidos ou anonimizados a pedido do usuário, excetuando os casos em que a lei oferecer outro tratamento.</p>
                <p>Ainda, os dados pessoais dos usuários apenas podem ser conservados após o término de seu tratamento nas seguintes hipóteses previstas no artigo 16 da referida lei:</p>
                <p><strong>I</strong> - cumprimento de obrigação legal ou regulatória pelo controlador;</p>
                <p><strong>II</strong> - estudo por órgão de pesquisa, garantida, sempre que possível, a anonimização dos dados pessoais;</p>
                <p><strong>III</strong> - transferência a terceiro, desde que respeitados os requisitos de tratamento de dados dispostos nesta Lei;</p>
                <p><strong>IV</strong> - uso exclusivo do controlador, vedado seu acesso por terceiro, e desde que anonimizados os dados.</p>
            
                <h5>SEÇÃO 5 - SEGURANÇA DOS DADOS PESSOAIS ARMAZENADOS</h5>
                <p>A plataforma se compromete a aplicar as medidas técnicas e organizativas aptas a proteger os dados pessoais de acessos não autorizados e de situações de destruição, perda, alteração, comunicação ou difusão de tais dados.</p>
                <p>Os dados relativas a cartões de crédito são criptografados usando a tecnologia "secure socket layer" (SSL) que garante a transmissão de dados de forma segura e confidencial, de modo que a transmissão dos dados entre o servidor e o usuário ocorre de maneira cifrada e encriptada.</p>
                <p>A plataforma não se exime de responsabilidade por culpa exclusiva de terceiro, como em caso de ataque de hackers ou crackers, ou culpa exclusiva do usuário, como no caso em que ele mesmo transfere seus dados a terceiros. O site se compromete a comunicar o usuário em caso de alguma violação de segurança dos seus dados pessoais.</p>
                <p>Os dados pessoais armazenados são tratados com confidencialidade, dentro dos limites legais. No entanto, podemos divulgar suas informações pessoais caso sejamos obrigados pela lei para fazê-lo ou se você violar nossos Termos de Serviço.</p>
                
                <h5>SEÇÃO 6 - COMPARTILHAMENTO DOS DADOS</h5>
                <p>O compartilhamento de dados do usuário ocorre apenas com os dados referentes a publicações realizadas pelo próprio usuário, tais ações são compartilhadas publicamente com os outros usuários.</p>
                <p>Os dados do perfil do usuário são compartilhados publicamente em sistemas de busca e dentro da plataforma, sendo permitido ao usuário modificar tal configuração para que seu perfil não apareça nos resultados de busca de tais ferramentas.</p>

                <h5>SEÇÃO 6 - OS DADOS PESSOAIS ARMAZENADOS SERÃO TRANSFERIDOS A TERCEIROS?</h5>
                <p>Os dados pessoais podem ser compartilhados com terceiros.</p>
                <p>Os terceiros recebem os dados na medida do necessário para permitir que eles realizem os serviços contratados</p>
                <p>Com relação aos fornecedores de serviços terceirizados como processadores de transação de pagamento, informamos que cada qual tem sua própria política de privacidade. Desse modo, recomendamos a leitura das suas políticas de privacidade para compreensão de quais informações pessoais serão usadas por esses fornecedores.</p>
                <p>Os fornecedores podem ser localizados ou possuir instalações localizadas em países diferentes. Nessas condições, os dados pessoais transferidos podem se sujeitar às leis de jurisdições nas quais o fornecedor de serviço ou suas instalações estão localizados.</p>
                <p>Ao acessar nossos serviços e prover suas informações, você está consentindo o processamento, transferência e armazenamento desta informação em outros países.</p>
                <p>Ao ser redirecionado para um aplicativo ou site de terceiros, você não será mais regido por essa Política de Privacidade ou pelos Termos de Serviço da nossa plataforma. Não somos responsáveis pelas práticas de privacidade de outros sites e lhe incentivamos a ler as declarações de privacidade deles.</p>

                <h5>SEÇÃO 07 – COOKIES OU DADOS DE NAVEGAÇÃO</h5>
                <p>Os cookies referem-se a arquivos de texto enviados pela plataforma ao computador do usuário e visitante e que nele ficam armazenados, com informações relacionadas à navegação no site. Tais informações são relacionadas aos dados de acesso como local e horário de acesso e são armazenadas pelo navegador do usuário e visitante para que o servidor da plataforma possa lê-las posteriormente a fim de personalizar os serviços da plataforma.</p>
                <p>O usuário e o visitante da plataforma Kifila manifesta conhecer e aceitar que pode ser utilizado um sistema de coleta de dados de navegação mediante à utilização de cookies.</p>
                <p>O cookie persistente permanece no disco rígido do usuário e visitante depois que o navegador é fechado e será usado pelo navegador em visitas subsequentes ao site. Os cookies persistentes podem ser removidos seguindo as instruções do seu navegador. Já o cookie de sessão é temporário e desaparece depois que o navegador é fechado. É possível redefinir seu navegador da web para recusar todos os cookies, porém alguns recursos da plataforma podem não funcionar corretamente se a capacidade de aceitar cookies estiver desabilitada.</p>
            
                <h5>SEÇÃO 8 - CONSENTIMENTO</h5>
                <p>Ao utilizar os serviços e fornecer as informações pessoais na plataforma, o usuário está consentindo com a presente Política de Privacidade.</p>
                <p>O usuário, ao cadastrar-se, manifesta conhecer e pode exercitar seus direitos de cancelar seu cadastro, acessar e atualizar seus dados pessoais e garante a veracidade das informações por ele disponibilizadas.</p>
                <p>O usuário tem direito de retirar o seu consentimento a qualquer tempo, para tanto deve entrar em contato através do e-mail kifila@gmail.com</p>

                <h5>SEÇÃO 9 - ALTERAÇÕES PARA ESSA POLÍTICA DE PRIVACIDADE</h5>
                <p>Reservamos o direito de modificar essa Política de Privacidade a qualquer momento, então, é recomendável que o usuário e visitante revise-a com frequência.</p>
                <p>As alterações e esclarecimentos vão surtir efeito imediatamente após sua publicação na plataforma. Quando realizadas alterações os usuários serão notificados. Ao utilizar o serviço ou fornecer informações pessoais após eventuais modificações, o usuário e visitante demonstra sua concordância com as novas normas.</p>
                <p>Diante da fusão ou venda da plataforma à outra empresa os dados dos usuários podem ser transferidas para os novos proprietários para que haja permanência dos serviços oferecidos.</p>
                
                <h5>SEÇÃO 10 – JURISDIÇÃO PARA RESOLUÇÃO DE CONFLITOS</h5>
                <p>Para a solução de controvérsias decorrentes do presente instrumento será aplicado integralmente o Direito brasileiro.</p>
                <p>Os eventuais litígios deverão ser apresentados no foro da comarca em que se encontra a sede da empresa.</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-modal-privacy-policy" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
        </div>
    </div>
      
    <?php 
    require('./components/scripts.php');
    ?>
    </body>
</html>