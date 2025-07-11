<h1>Projeto Laravel de Estudos</h1>

<p>Este projeto foi desenvolvido com <strong>Laravel</strong> com o objetivo principal de treino e aprendizado sobre integração com frontend, autenticação e funcionalidades básicas de CRUD, além do envio de emails. Não é um sistema pronto para produção, mas sim um laboratório para testar conceitos e funcionalidades principais.</p>

<h2>Funcionalidades</h2>
<ul>
    <li><strong>Sistema de login e cadastro</strong> com autenticação básica.</li>
    <li><strong>CRUD de usuários</strong> com paginação (páginas 1/2/3) e sistema de busca por nome.</li>
    <li><strong>Requisições fetch via JavaScript</strong> integradas com Laravel para chamadas assíncronas.</li>
    <li><strong>Envio de email de suporte:</strong>
        <ul>
            <li>Usuário escreve uma mensagem e envia o email.</li>
            <li>Email é enviado via Laravel Mail.</li>
        </ul>
    </li>
    <li>Sistema simples de páginas com navegação e busca no CRUD.</li>
</ul>

<h2>Objetivo do Projeto</h2>
<p>Este projeto foi criado para experimentar e praticar:</p>
<ul>
    <li>Integração entre frontend (JS fetch) e backend Laravel.</li>
    <li>Autenticação e autorização básica.</li>
    <li>Implementação de CRUD com paginação e filtros.</li>
    <li>Envio de emails usando Laravel Mail.</li>
    <li>Construção funcional sem foco no design visual (frontend simples e funcional).</li>
</ul>

<h2>Observações Importantes</h2>
<ul>
    <li>Não há implementação avançada de segurança para identificar usuário que envia email (e.g. associar email à conta logada).</li>
    <li>Validações de segurança e proteção contra ataques ainda devem ser ajustadas para uso em produção.</li>
    <li>O frontend é simples e direto, com foco na funcionalidade e não na aparência.</li>
    <li>É um projeto para estudo e prática, não para uso comercial.</li>
</ul>

<h2>Como rodar o projeto</h2>
<ol>
    <li>Clone o repositório.</li>
    <li>Configure seu arquivo <code>.env</code> com as credenciais do banco de dados e SMTP para envio de emails.</li>
    <li>Rode as migrations e o queue do email
    </li>
    <li>Inicie os servidores locais:
        <pre><code>php artisan serve
        <pre><code>npm run dev
        </code></pre>
    </li>
    <li>Acesse o sistema via navegador, faça login, teste o CRUD e o envio de email.</li>
</ol>

<h2>Tecnologias usadas</h2>
<ul>
    <li>Laravel Framework (PHP)</li>
    <li>Blade Templates</li>
    <li>JavaScript Fetch API</li>
    <li>SMTP para envio de email</li>
</ul>
