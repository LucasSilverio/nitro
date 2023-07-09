<div class="px-4 py-5 my-5 text-center">
    <h1>Nitro News</h1>
    <div class="col-md-2 mb-12 text-left">
        <a href="/" class="btn btn-warning">Voltar</a>
    </div>
    <div class="col-md-12">
        <h4>Dados do usuário</h4>
        <form action="/usuarios/salvar" method="post">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <label class="form-label" for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="" value="">
                    <span style="color:red"><?php echo (isset($_SESSION['flash']['nome']) ? $_SESSION['flash']['nome'] : '') ; ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mt-3">
                    <label class="form-label" for="nome">Telefone</label>
                    <input type="text" name="telefone" class="form-control" placeholder="" value="">
                    <span style="color:red"><?php echo (isset($_SESSION['flash']['telefone']) ? $_SESSION['flash']['telefone'] : '') ; ?></span>
                </div>
                <div class="col-md-6 mt-3">
                    <label class="form-label" for="nome">Nível</label>
                    <input type="text" name="nivel" class="form-control" placeholder="" value="">
                    <span style="color:red"><?php echo (isset($_SESSION['flash']['nivel']) ? $_SESSION['flash']['nivel'] : '') ; ?></span>
                </div>
            </div>
            <div class="row mt-3">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
            
        </form>
    </div>
</div>
