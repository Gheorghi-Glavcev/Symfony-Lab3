<?
namespace App\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LogController extends AbstractController {
    public function index($name, LoggerInterface $logger) {
        $logger->info("Saying hello to $name!");
    }
}