import { registerBlockType } from '@wordpress/blocks';
registerBlockType( 'wsr/block-starter', {
    title: 'WSR Starter Block',
    icon: 'smiley',
    category: 'widgets',
    edit: function( { className } ) {
        return (
            <div className={ className }>Hola, mundo!</div>
        )
    },
    save: function( { className } ) {
        return(
            <div className={ className }>Hola, mundo!</div>
        )
    }
    
} );
