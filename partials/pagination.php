<?php
//safety checks to ensure "valid" data
if (!isset($total)) {
    $total = 1;
}
if (!isset($total_pages)) {
    $total_pages = 1;
}
if (!isset($page)) {
    $page = 1;
}

function check_apply_disabled_prev($page)
{
    echo $page < 1 ? "disabled" : "";
}
function check_apply_active($page, $i)
{
    echo ($page - 1) == $i ? "active" : "";
}
function check_apply_disabled_next($page)
{
    global $total_pages;
    echo ($page) >= $total_pages ? "disabled" : "";
}
?>
<nav aria-label="Generated Pagination">
    <ul class="pagination justify-content-center">
        <li class="page-item <?php echo ($page - 1) < 1 ? "disabled" : ""; ?>">
            <a class="page-link" href="?<?php se(persistQueryString($page - 1)); ?>" tabindex="-1">Previous</a>
        </li>
        <?php for ($i = 0; $i < $total_pages; $i++) : ?>
            <li class="page-item <?php echo ($page - 1) == $i ? "active" : ""; ?>"><a class="page-link" href="?<?php se(persistQueryString($i + 1)); ?>"><?php echo ($i + 1); ?></a></li>
        <?php endfor; ?>
        <li class="page-item <?php echo ($page) >= $total_pages ? "disabled" : ""; ?>">
            <a class="page-link" href="?<?php se(persistQueryString($page + 1)); ?>">Next</a>
        </li>
    </ul>
</nav> 