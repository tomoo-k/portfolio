<div class="contents">
  <div class="user-container1">
    <h2>会員一覧</h2>
  </div>

    <table cellpadding="4px" cellspacing="4px" >
        <thead>
            <tr>
                <th scope="col"><?= __('id') ?></th>
                <th scope="col"><?= __('email') ?></th>
                <th scope="col"><?= __('password') ?></th>
                <th scope="col"><?= __('created_at') ?></th>
                <th scope="col"><?= __('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><div class="pass"><?= h($user->email) ?></div></td>
                <td><div class="pass"><?= h($user->password) ?></div></td>
                <td><div class="pass"><?= h($user->created_at) ?></div></td>
                <td><div class="pass"><?= h($user->updated_at) ?></div></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



  <div class="btn-return">
    <a href="<?= $this->Url->build( ['controller' => 'Sells','action' => 'index']); ?>">
      <div class="btn-return2">
        もどる
      </div>
    </a>
  </div>


</div>
