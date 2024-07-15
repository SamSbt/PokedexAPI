import { Container } from "react-bootstrap";

import NavbarTop from "../components/navbar/navbar";
import Routing from "./Routes";

import "./assets/styles/App.scss";

function App() {
	return (
		<>
			<Container fluid className="g-0">
				<div className="wrapper">
					<NavbarTop />
					{/* header si besoin */}
					<main>
						<Routing />
					</main>
					{/* footer si besoin */}
				</div>
			</Container>
		</>
	);
}

export default App;
