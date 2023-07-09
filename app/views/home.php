<div class="px-4 py-5 my-5 text-center">
    <h1>Nitro News</h1>
    <div class="col-md-2 mb-12 text-left">
        <a href="/usuarios/novo" class="btn btn-primary">Novo</a>
    </div>
    <?php if (count($data['data']) > 0): ?>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">Nível</th>
            <th scope="col">Data de Cadastro</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data['data'] as $index => $item): ?>
                <tr>
                    <td>
                        <?php echo $item['id']; ?>
                    </td>
                    <td>
                        <?php echo $item['nome']; ?>
                    </td>
                    <td>
                        <?php echo $item['telefone']; ?>
                    </td>
                    <td>
                        <?php echo $item['nivel']; ?>
                    </td>
                    <td>
                        <?php echo date("d/m/Y H:i:s", strtotime($item['data_cadastro'])); ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php else: ?>
        <div class="alert alert-warning mt-3">Nenhum usuário cadastrado</div>
    <?php endif; ?>
</div>
