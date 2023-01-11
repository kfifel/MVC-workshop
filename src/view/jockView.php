<div class="breadcrumb">
    <span class="breadcrumb-item">Jock</span>
    <span class="breadcrumb-item breadcrumb-active">overview</span>
</div>
<div class="container mt-5">
    <div class="d-flex justify-content-between my-4">
        <h3>List of Jock <i class="fas fa-duotone fa-face-smile-beam"></i></h3>
        <a href="/index.php?controller=jocks&action=add">
            <button class="btn btn-primary">
                Add new jock
            </button>
        </a>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr class="table-primary">
            <th>#</th>
            <th>Jock</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($jocks as $jock): ?>
            <tr>
                <td><?= $jock['id']?></td>
                <td><?= $jock['jock']?></td>
                <td class="d-flex">
                    <a href="/index.php?controller=jocks&action=edit&id=<?= $jock['id'] ?>"><button class="btn"><i class="fas fa-solid fa-pen text-primary"></i></button></a>
                    <a href="/index.php?controller=jocks&action=delete&id=<?= $jock['id'] ?>"><button class="btn ml-3"><i class="fas fa-solid fa-trash text-danger"></i></button></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>