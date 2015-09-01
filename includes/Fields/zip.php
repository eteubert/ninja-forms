<?php if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Class NF_Fields_Zip
 */
class NF_Fields_Zip extends NF_Fields_Textbox
{
    protected $_name = 'zip';

    protected $_nicename = 'zip';

    protected $_group = 'user_info';

    public function __construct()
    {
        $this->_nicename = __( 'zip', Ninja_Forms::TEXTDOMAIN );
    }

    public function template()
    {
        // Placeholder output
        ?>
        <input type="<?php echo $this->_type; ?>">
        <?php
    }

    public function validate( $value )
    {
        parent::validate( $value );
    }

}
