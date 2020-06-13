import { registerBlockType } from '@wordpress/blocks';
registerBlockType( 'wsr/block-starter', {
    title: 'WSR Starter Block',
    icon: 'smiley',
    category: 'widgets',
    edit: () => <div>Hola, mundo!</div>,
    save: () => <div>Hola, mundo!</div>,
} );
