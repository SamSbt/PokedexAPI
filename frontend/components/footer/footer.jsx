import Container from "react-bootstrap/Container";
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";

import "./footer.scss";

function Footer(){
    return(
        <>
            <footer className="">
                <Container>
                    <Row>
                        <Col className="text-center">
                            <span>Réseau 1 </span>
                        </Col>
                        <Col className="text-center">
                            <span>Réseau 2 </span>
                        </Col>
                        <Col className="text-center">
                            <span>Réseau 3 </span>
                        </Col>
                    </Row>
                    <Row>   
                        <Col className="text-center mt-3">
                            <span>&copy; 2024 Pokemon DWWM</span>
                        </Col>
                    </Row>
                </Container>
            </footer>
        </>
    )

}
export default Footer;