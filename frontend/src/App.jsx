import "bootstrap/dist/css/bootstrap.min.css";
import { Container } from "react-bootstrap";

import NavbarTop from "../components/navbar/navbar";
import Routing from "./Routes";
import Footer from "../components/footer/footer";
import Header from "../components/header/header";

function App() {
	return (
		<>
			<Container fluid className="g-0">
				<div className="wrapper">
					<NavbarTop />
					<Header />
					<main>
						<Routing />
					</main>
					<Footer />
				</div>
			</Container>
		</>
	);
}

export default App;
