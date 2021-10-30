<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div class="card-header">

                    <div class="d-flex">
                        <div class="p-2"> <h2 class="text-center">  News List</h2></div>

                        <div class="ml-auto p-2">
                            <a class="btn btn-sm btn-success" href="/news/create">Create News</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Describtion</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  foreach ($news as $news_item): ?>
                            <tr>
                                <th scope="row">1</th>
                                <td><?php
                                    echo $news_item['title']; ?></td>
                                <td><?php
                                    echo $news_item['text']; ?></td>
                                <td><button class="btn btn-sm btn-info" href="<?php
                                    echo site_url('news/' . $news_item['slug']); ?>">View </button></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>






