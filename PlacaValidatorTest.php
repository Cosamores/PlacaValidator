use PHPUnit\Framework\TestCase;

class PlacaValidatorTest extends TestCase {
    private $validator;

    protected function setUp(): void {
        $this->validator = new PlacaValidator();
    }

    public function testPlacaValida() {
        $this->assertTrue($this->validator->validaPlaca('ABC1D23'));
    }

    public function testPlacaComMenosDeSeteCaracteres() {
        $this->assertFalse($this->validator->validaPlaca('ABC1D2'));
    }

    public function testPlacaComMaisDeSeteCaracteres() {
        $this->assertFalse($this->validator->validaPlaca('ABC1D234'));
    }

    public function testPlacaComPrimeirosTresCaracteresNaoSendoLetras() {
        $this->assertFalse($this->validator->validaPlaca('1BC1D23'));
    }

    public function testPlacaComQuartoCaractereNaoSendoNumero() {
        $this->assertFalse($this->validator->validaPlaca('ABCAD23'));
    }

    public function testPlacaComQuintoCaractereNaoSendoLetra() {
        $this->assertFalse($this->validator->validaPlaca('ABC11D23'));
    }

    public function testPlacaComUltimosDoisCaracteresNaoSendoNumeros() {
        $this->assertFalse($this->validator->validaPlaca('ABC1D2A'));
    }

    public function testPlacaComCaractereEspecial() {
        $this->assertFalse($this->validator->validaPlaca('ABC1@23'));
    }
}
