<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$width  = isset( $width ) && intval( $width ) > 0 ? $width : 36;
$height = isset( $height ) && intval( $height ) > 0 ? $height : 36;
?>
<svg data-icon='bag-2' width="<?php esc_attr_e( $width ) ?>" height="<?php esc_attr_e( $height ) ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="currentColor">
    <path d="M9.8 42q-.8 0-1.425-.475T7.55 40.3L1.9 19.95q-.2-.75.275-1.35.475-.6 1.275-.6h10L22.7 4.5q.25-.3.55-.475.3-.175.7-.175.4 0 .7.175.3.175.55.475L34.4 18h10.25q.75 0 1.225.6.475.6.275 1.35l-5.7 20.35q-.2.75-.825 1.225Q39 42 38.2 42Zm.5-3h27.4l5.05-18H5.3ZM24 33q1.25 0 2.125-.875T27 30q0-1.25-.875-2.125T24 27q-1.25 0-2.125.875T21 30q0 1.25.875 2.125T24 33Zm-6.9-15h13.65l-6.8-10Zm-6.8 21h27.4Z"/>
</svg>