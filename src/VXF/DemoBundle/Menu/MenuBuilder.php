<?php
// src/VXF/DemoBundle/Menu/MenuBuilder.php
namespace VXF\DemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Mopa\Bundle\BootstrapBundle\Navbar\AbstractNavbarMenuBuilder;

class MenuBuilder
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }


    public function mainMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav');
        
        //$menu->addChild('Como Funciona?', array('route' => '_how'));
        //$menu->addChild('Experimente', array('route' => '_register'));
        //$menu->addChild('Fale Conosco', array('route' => '_feedback'));

        return $menu;
    }
    
    public function assideMenu(Request $request)
    {
        $m = $this->factory->createItem('root');
        $m->setChildrenAttribute('class', 'nav nav-list');
		
	//	$aid = $request->get('aid');
        
			$m->addChild('Dashboard', array());

	    $m->addChild('Entidades')
	    	->setAttribute('class', 'nav-header');

			$m->addChild('Clientes', array());
			$m->addChild('Projectos', array());
			$m->addChild('Documentos', array());
	
	    $m->addChild('Documentos')
	    	->setAttribute('class', 'nav-header');
			
			$m->addChild('Pagamentos', array());
			$m->addChild('Comunicação', array());
			
	    $m->addChild('Relatórios')
	    	->setAttribute('class', 'nav-header');
	
			$m->addChild('Income', array());
			$m->addChild('Taxes', array());
			
	    $m->addChild('Configuração')
	    	->setAttribute('Taxas', 'nav-header');

        
	
        return $m;
    }
}
