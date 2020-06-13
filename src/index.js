import { registerBlockType } from '@wordpress/blocks';
registerBlockType( 'wsr/block-starter', {
    title: 'WSR Slider Block',
    icon: 'smiley',
    category: 'layout',
    edit: () => <div>Hola, mundo!</div>,
    save: () => <div>Hola, mundo!</div>,
} );
