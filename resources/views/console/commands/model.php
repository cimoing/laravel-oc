<?php
/**
 * @var string $namespace
 * @var string $className
 * @var string $tableName
 * @var array $columns
 */
?>

<?php
echo "<?php\n";
?>

namespace <?php echo $namespace; ?>;

<?php
if (array_key_exists('deleted_at', $columns)) {
    echo "use Illuminate\Database\Eloquent\SoftDeletes;\n";
}
if (in_array('datetime', $columns)) {
    echo "use Illuminate\Support\Carbon;\n";
}
?>
use App\Model\ModelAbstract;

/**
 * Class <?php echo $className.PHP_EOL; ?>
 * @package <?php echo $namespace.PHP_EOL; ?>
<?php
foreach ($columns as $column => $type) {
    if ($type == 'datetime') {
        echo " * @property Carbon $column\n";
    } else {
        echo " * @property $type $column\n";
    }
}
?>
 */
class <?php echo $className; ?> extends ModelAbstract {

<?php
if (array_key_exists('deleted_at', $columns)) {
    echo "    use SoftDeletes;\n";
}
?>

    protected $table = "<?php echo $tableName; ?>";

    protected $fillable = [
<?php
   foreach ($columns as $column => $type) {
       if (!in_array($column, ['created_at', 'deleted_at', 'updated_at'])) {
           echo "        '$column',\n";
       }
   }
?>
    ];

    protected $casts = [
<?php
foreach ($columns as $column => $type) {
    echo "        '{$column}' => '{$type}',\n";
}
?>
    ];
}
